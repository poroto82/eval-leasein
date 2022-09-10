<template>
  <div class="container has-background-light" style="height:100vh">

    <div class="columns">
      <div class="column">
        <h2 class="title">CLIENTES</h2>
      </div>

    </div>
    <div class="p-5">

      <div class="columns">
        <div class="column">
          <b-field>
            <b-input icon="magnify" v-model="filter" @input="filtrar" placeholder="Filtro" rounded></b-input>
          </b-field>
        </div>
      </div>

      <div class="columns">
        <div class="column">
          <b-table :data="clientes_filtrados">

            <b-table-column field="id" label="ID" sortable v-slot="props">
              {{ props.row.id }}
            </b-table-column>

            <b-table-column field="empresa" label="Empresa" sortable v-slot="props">
              {{ props.row.empresa }}
            </b-table-column>

            <b-table-column field="tipoSector" label="Sector" sortable v-slot="props">
              {{ props.row.tipoSector.nombre }}
            </b-table-column>

            <b-table-column field="tipoTamanio" label="Tamaño" sortable v-slot="props">
              {{ props.row.tipoTamanio.nombre }}
            </b-table-column>


            <b-table-column label="" width="100" v-slot="props">
              <div class="buttons">
                <b-tooltip label="Ver Equipos">
                  <a class="button is-primary" :href="'/clientes/'+props.row.id">Ver Equipos</a>
                </b-tooltip>
              </div>
            </b-table-column>

          </b-table>
        </div>
      </div>
    </div>
  </div>

</template>

<script>

  export default {
    props: ['clientes'],
    components: {
    },
    data() {
      return {
        filter: '',
        clientes_filtrados:[]
      }
    },
    mounted() {
      this.clientes_filtrados = this.clientes
    },
    methods: {
      filtrar() {
        let e = this.filter
        this.clientes_filtrados = this.clientes.filter(f => f.empresa.toLowerCase().includes(e.toLowerCase()) || f.tipoSector.nombre.toLowerCase().includes(e.toLowerCase()) || f.id == e)
      }
    }
  }
</script>