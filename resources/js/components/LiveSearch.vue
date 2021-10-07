<template>
  <div>
    <div id="pos_search_top" class="row pt-5">
      <div class="form">
        <div id="searchbox" class="form_search">
          <label for="pos_query_top"></label>
          <input
            v-model="searchmodel"
            @keyup="dropproducts"
            class="search_query form-control ac_input"
            type="text"
            placeholder="Αναζήτηση προϊόντων..."
            id="pos_query_top"
            name="searchname"
            value=""
            autocomplete="off"
          />
          <button
            type="submit"
            name="submit_search"
            @click="findproducts"
            class="btn btn-default search_submit"
          >
            <i class="icon-search"></i><span>Αναζήτηση</span>
          </button>
        </div>
      </div>
    </div>
    <!-- {{ $query }} -->
    <div style="position: relative;">
        <ul style="position: absolute;left: 0;right: 0;z-index: 999999" >
      <li v-for="product in products" :key="product.id" class="list-group-item">
        <a v-bind:href="'product/' + product.slug">
        {{ product.title }}
        </a>
      </li>
    </ul>
    </div>
  </div>
</template>


<script>
import Axios from "axios";
export default {
  data() {
    return {
      products: [],
      searchmodel: "",
    };
  },

  mounted() {
    console.log("Live search mounted");
  },

  methods: {
    dropproducts() {
      // onclick of the button
    //   console.log("dropproducts");
      axios.get("/productsdrop").then((response) => {
          console.log(response);
          this.products = response.data;
      }).catch(function(error){
          console.log(error);
      });
    },
    findproducts: function () {
      window.location.href = `/findproducts?searchname=${this.searchmodel}`;
    },
  },
};
</script>
