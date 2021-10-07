<template>
  <div>
    <div class="col-sm-3" id="sidebar">
      <nav id="sidebar">
        <ul class="nav navbar-nav list-group d-flex justify-content-center">
          <li class="list-group-item text-center list-group-item-filters">
            <h1>{{ trans("page.currentfilters") }}</h1>
          </li>
          <li class="list-group-item text-center list-group-item-filters">
            <h2>{{ trans("page.categories") }}</h2>
          </li>

          <div v-for-key="category in categories" :key="category.id">
            <div class="list-group-item text-center p-3">
              <a
                :href="route('category', category.id)"
                :key="category.id"
                class="align-middle"
              >
                {{ $category.title }}
              </a>
            </div>
          </div>

          <hr class="list-group-item-filters" />
          <li class="list-group-item text-center list-group-item-filters">
            <h2>{{ trans("page.price") }}</h2>
          </li>
          <input
            class="text-center"
            type="text"
            id="amount"
            readonly
            style="
              border: 0;
              color: #000000;
              font-weight: bold;
              font-size: 18px;
            "
          />

          <div id="slider-range"></div>

          <!-- <hr /> -->

          <hr class="list-group-item-filters" />
          <li class="list-group-item text-center list-group-item-filters">
            <h2>{{ trans("page.brands") }}</h2>
          </li>

          <div v-for-key="brand in brands" class="list-group-item">
            <div class="list-group-item text-center p-3">
              <a
                :href="route('brand', brand.slug)"
                :key="brand.id"
                class="align-middle"
              >
                {{ $brand.title }}
              </a>
            </div>
          </div>
        </ul>
      </nav>
    </div>
  </div>
</template>


<script>
export default {
  props: {category: [], brand:[]},
  data: function () {
    return {
      categories: [],
      // brands: [],
      //   products: [],
      loading: true,
      selected: {
        prices: [],
        categories: [],
        brands: [],
      },
    };
  },
  mounted: function() {
    console.log("Sidebar mounted");
    // this.loadCategories();
    this.loadBrands();
  },
  watch: {
    selected: {
      handler: function () {
        this.loadCategories();
        this.loadBrands();
        // this.loadProducts();
      },
      deep: true,
    },
  },
  methods: {
    loadCategories: function () {
      console.log("loadCategories");
      axios
        .get(url("apicategories"))
        .then((response) => {
          console.log(response);
          this.loading = false;
          this.categories = response.data.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    loadBrands: function () {
      console.log("Get Brands");
      axios
        .get(url("apibrands"))
        .then((response) => {
          console.log(response.data);
          // this.loading = false;
          this.brands = response.data.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
    // getProductByCategory: function () {
    //   axios
    //     .get(route("category") + slug)
    //     .then((response) => {
    //       console.log(response);
    //       this.loading = false;
    //       this.categories = response.data.data;
    //     })
    //     .catch(function (error) {
    //       console.log(error);
    //     });
    // },
    getProductByBrand: function (id) {
      console.log(id);
    },
  },
};
</script>
