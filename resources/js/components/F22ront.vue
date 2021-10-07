<template>
  <div class="container" :class="{ loading: loading }">
    <div class="row">
      <div class="col-lg-3 mb-4">
        <h1 class="mt-4">Filters</h1>

        <h3 class="mt-2">Price</h3>

        <div class="mt-3 pricerange">
          <input
            type="range"
            min="0"
            max="10000"
            step="10"
            v-model.number="minprice"
          />
          <input
            type="range"
            min="0"
            max="10000"
            step="10"
            v-model.number="maxprice"
          />
        </div>
        <div class="range-values">Min: {{ minprice }} Max: {{ maxprice }}</div>
        <!-- <div class="form-check" v-for="(price, index) in prices" :key="price.index">
                    <label class="form-check-label" :for="'price' + index">
                        {{ price.title }} ({{ price.products_count }})
                    </label>
                    </div> -->

        <h3 class="mt-2">Categories</h3>
        <div
          class="form-check"
          v-for="(category, index) in categories"
          :key="category.index"
        >
          <input
            class="form-check-input"
            type="checkbox"
            :value="category.id"
            :id="'category' + index"
            v-model="selected.categories"
          />
          <label class="form-check-label" :for="'category' + index">
            {{ category.title }} ({{ category.products_count }})
          </label>
        </div>

        <h3 class="mt-2">brands</h3>
        <div
          class="form-check"
          v-for="(brand, index) in brands"
          :key="brand.index"
        >
          <input
            class="form-check-input"
            type="checkbox"
            :value="brand.id"
            :id="'brand' + index"
            v-model="selected.brands"
          />
          <label class="form-check-label" :for="'brand' + index">
            {{ brand.title }} ({{ brand.products_count }})
          </label>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mb-4" v-for="product in products">
            <div class="card h-100">
              <a href="#">
                <img
                  class="card-img-top"
                  src="http://placehold.it/700x400"
                  alt=""
                />
              </a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{ product.title }}</a>
                </h4>
                <h5>$ {{ product.price }}</h5>
                <p class="card-text">{{ product.description }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "front-page",
  data: function () {
    return {
      minprice: 0,
      maxprice: 10000,
      categories: [],
      brands: [],
      products: [],
      loading: true,
      selected: {
        // prices: [],
        categories: [],
        brands: [],
      },
    };
  },

  mounted() {
    this.loadCategories();
    this.loadBrands();
    // this.loadPrices();
    this.loadProducts();
  },

  watch: {
    selected: {
      handler: function () {
        this.loadCategories();
        this.loadBrands();
        // this.loadPrices();
        this.loadProducts();
      },
      deep: true,
    },
  },

  methods: {
    getProductBody(product) {
      let body = this.stripTags(product.body);

      return body.length > 300 ? body.substring(0, 300) + "..." : body;
    },

    stripTags(text) {
      return text.replace(/(<([^>]+)>)/gi, "");
    },
    loadCategories: function () {
      axios
        .get(url("/apicategories/"), {
          params: _.omit(this.selected, "categories"),
        })
        .then((response) => {
          console.log("apicategories axios route");
          console.log(response.data.data);
          this.categories = response.data.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    loadProducts: function () {
      axios
        .get(route("apiproducts"), {
          params: this.selected,
        })
        .then((response) => {
          console.log("apiproducts axios route");
          console.log(response.data.data);
          this.products = response.data.data;
          this.loading = false;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    loadBrands: function () {
      axios
        .get(route("apibrands"), {
          params: _.omit(this.selected, "brands"),
        })
        .then((response) => {
          console.log("apibrands axios route");
          console.log(response.data.data);
          this.brands = response.data.data;
          this.loading = false;
        })
        .catch(function (error) {
          console.log(error);
        });
    },

    // loadPrices: function () {
    //     axios.get(route("apiprices"), {
    //         params: _.omit(this.selected, 'prices')
    //         })
    //         .then((response) => {
    //             console.log('api price axios route');
    //             console.log(response.data);
    //             this.prices = response.data;
    //             this.loading = false;
    //         })
    //         .catch(function (error) {
    //             console.log(error);
    //         });
    // }
  },
};
</script>

<style>
.pricerange {
  width: 200px;
  margin: auto 16px;
  text-align: center;
  position: relative;
}
.pricerange input[type="range"] {
  position: absolute;
  left: 0;
  bottom: 0;
}
input[type="range"]::-webkit-slider-thumb {
  z-index: 2;
  position: relative;
  top: 2;
  margin-top: -7px;
}
</style>
