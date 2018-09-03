<template>
    <div class="card">
        <div class="card-body">
            <blockquote class="blockquote">
                <p>Buscar</p>
                <div class="form-group">
                    <input v-model="strSearch" v-on:keyup.enter="searchPaciente" type="text" class="form-control" placeholder="Buscar" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Busca por Nombre, Apellidos, Email o teléfono</small>
                </div>
            </blockquote>

            <div class="list-group">
                <a v-for="(pac, index) in pacientes" v-bind:key="index" v-bind:value="pac" :href="'/paciente/'+pac.id" class="list-group-item list-group-item-action">{{ pac.name+" "+pac.lastname }}</a>
                <img class="d-block mx-auto" v-if="loading" src="/assets/imgs/loading.gif" width="100" height="100" />
                <p class="mb-0 text-center" v-if="loading">Buscando...</p>
                <p class="mb-0 text-center" v-if="notFound">No se han encontrado resultados. Intentelo de nuevo con un campo diferente.</p>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        props: {
            errorClass: {
                type: String,
                required: false,
                validator: function(value) {
                    return [
                        'is-invalid',
                        'is-valid'
                    ].indexOf(value) !== -1;
                }
            }
        },
        data() {
            return {
                strSearch: "",
                pacientes: [],
                loading: false,
                notFound: false
            }
        },
        methods: {
            setFormData(data) {
                this.pacientes = data;
                this.loading = false;
                this.notFound = false;
            },
            searchPaciente() {
                if(this.strSearch !== "") {
                    let tempThis = this;
                    this.loading = true;
                    tempThis.notFound = false;
                    axios.get(SITE_URL + 'api/buscar/pacientes/' + this.strSearch)
                    .then(function (response) {
                        console.log(response.data);
                        if(response.status == 200) {
                            var data = response.data;
                            if(data.length > 0) {
                                tempThis.setFormData(data);
                            } else {
                                tempThis.pacientes = [];
                                tempThis.loading = false;
                                tempThis.notFound = true;
                            }
                        }
                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            }
        }
    }
</script>

<style>
</style>