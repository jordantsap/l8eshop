<template>
  <div class="container" :class="{ loading: loading }">
    <div class="row">
      <div class="col-lg-3 mb-4">
        <li class="list-group-item text-center list-group-item-filters">
          <h1>{{ trans("page.currentfilters") }}</h1>
        </li>
        <li class="list-group-item text-center list-group-item-filters">
          <h2>{{ trans("page.categories") }}</h2>
        </li>
        <div
          class="list-group-item text-center p-3"
          v-for="category in categories"
        >
          <input
            class="form-check-input"
            type="checkbox"
            :value="category.id"
            :id="'category_' + category.id"
            v-model="selected.categories"
          />
          <label class="form-check-label" :for="'category_' + category.id">
            {{ category.title }} ({{ category.products_count }})
          </label>
        </div>

        <hr class="list-group-item-filters" />
        <div class="list-group-item text-center list-group-item-filters">
          <h2>{{ trans("page.price") }}</h2>
        </div>
        <input
          class="text-center"
          type="text"
          id="amount"
          readonly
          style="border: 0; color: #000000; font-weight: bold; font-size: 18px"
        />
        <div id="slider-range"></div>

        <hr class="list-group-item-filters" />
        <div class="list-group-item text-center list-group-item-filters">
          <h2>{{ trans("page.brands") }}</h2>
        </div>
        <div>
          <div class="list-group-item text-center p-3" v-for="brand in brands">
            <input
              class="form-check-input"
              type="checkbox"
              :value="'brand_' + brand.id"
              :id="'brand_' + brand.id"
              v-model="selected.brands"
            />
            <label class="form-check-label" :for="'brand_' + brand.id">
              {{ brand.title }} ({{ brand.products_count }})
            </label>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row mb-4">
          <div class="wrap-right">
            <div class="sort-item orderby p-3">
              <select name="orderby" class="use-chosen p-3">
                <option value="menu_order" selected="selected">
                  {{ trans("page.sorting") }}
                </option>
                <option value="price-asc">
                  {{ trans("page.sortby") }}: {{ trans("page.lowtohigh") }}
                </option>
                <option value="price-desc">
                  {{ trans("page.sortby") }}: {{ trans("page.hightolow") }}
                </option>
              </select>
            </div>
          </div>
        </div>
        <!--end wrap shop control-->

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

              <div class="card-footer">
                <p>Category</p>
                <a :href="product.category_id.slug">
                  {{ product.category_id.title }}
                </a>
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
  data: function () {
    return {
      // prices: [],
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
    this.loadProducts();
  },

  watch: {
    selected: {
      handler: function () {
        this.loadCategories();
        this.loadBrands();
        this.loadProducts();
      },
      deep: true,
    },
  },

  methods: {
    loadCategories: function () {
      axios
        .get(route("apicategories"), {
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
  },
};
</script>
