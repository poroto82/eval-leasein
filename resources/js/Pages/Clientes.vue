<template>
    <div class="container has-background-light" style="height:100vh">
        <h1 class="title">Cliente: {{cliente.cliente.empresa}}</h1>
        <h1 class="subtitle">Tamaño: {{cliente.cliente.tipoTamanio.nombre}}</h1>
        <h1 class="subtitle">Sector: {{cliente.cliente.tipoSector.nombre}}</h1>

        <b-table :data="cliente.equipos">
            <b-table-column field="id" label="ID" sortable v-slot="props">
                {{ props.row.id }}
            </b-table-column>

            <b-table-column field="codigo" label="Codigo" sortable v-slot="props">
                {{ props.row.codigo }}
            </b-table-column>

            <b-table-column field="" label="Tipo" sortable v-slot="props">
                {{ props.row.tipoEquipo.nombre }}
            </b-table-column>

            <b-table-column field="" label="Marca" sortable v-slot="props">
                {{ props.row.tipoMarca.nombre }}
            </b-table-column>

            <b-table-column field="" label="Procesador" sortable v-slot="props">
                {{ props.row.tipoProcesador.tipo }} - Generacion {{ props.row.tipoProcesador.generacion }}
            </b-table-column>

            <b-table-column field="" label="Fecha desde" sortable v-slot="props">
                {{ props.row.pivot.fecha_desde }}
            </b-table-column>

        </b-table>
    </div>
</template>

<script>
    export default {
        props: ['cliente'],
        components: {

        },
        data() {
            return {

            }
        },
        mounted() {
            
        }
    }
</script>