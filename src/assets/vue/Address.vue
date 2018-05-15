<template>
    <div class="card">
        <div class="card-body">
            <div class="row my-3">
                <div class="col">
                    <input v-model="zipcode" v-on:keyup="getAddressFromZipCode" type="text" class="form-control" :class="errorClass" name="address[postal_code]" placeholder="Codigo Postal">
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" name="address[street]" :class="errorClass" placeholder="Calle">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="address[interior_number]" :class="errorClass" placeholder="Numero Interior">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="address[exterior_number]" :class="errorClass" placeholder="Numero Exterior">
                </div>
            </div>
            <div class="row my-3">
                <div class="col-3">
                    <input type="text" v-model="estado" class="form-control" name="address[state]" :class="errorClass" placeholder="Estado">
                </div>
                <div class="col">
                    <select id="colonia" v-model="colonia" class="form-control" name="address[colony]" :class="errorClass" placeholder="Colonia" required>
                        <option v-for="(col, index) in colonias" v-bind:key="index" v-bind:value="col" v-bind:selected="index === 0">{{ col }}</option>
                    </select>
                </div>
                <div class="col">
                    <input v-model="ciudad" type="text" class="form-control" name="address[city]" :class="errorClass" placeholder="Ciudad" required>
                </div>
                <div class="col">
                    <input v-model="pais" type="text" class="form-control" name="address[country]" :class="errorClass" placeholder="Pais" required>
                </div>
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
                zipcode: "",
                estado: "",
                colonia: "",
                colonias: [],
                ciudad: "",
                pais: "México"
            }
        },
        methods: {
            setFormData(data) {
                this.pais = "México";
                this.ciudad = data.municipio;
                this.colonias = data.colonias;
                this.estado = data.estado;
            },
            getAddressFromZipCode() {
                if(this.zipcode !== "") {
                    let tempThis = this;
                    axios.get('https://api-codigos-postales.herokuapp.com/v2/codigo_postal/' + this.zipcode)
                    .then(function (response) {
                        if(response.status == 200) {
                            var data = response.data;
                            if(data.colonias.length > 0) {
                                tempThis.setFormData(data);
                            } else {
                                tempThis.colonias = [];
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