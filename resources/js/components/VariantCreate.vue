<template>
  <div>
    <div class="col-12">
      <div id="variants-wrapper">
        <div class="row variants">
          <div class="form-group col-5" id="variant.title">
            <label for="variant.title" class="col-form-label text-md-right">{{
              __("Μεταβλητή")
            }}</label>

            <div class="">
              <select
                class="form-control"
                id="variant.title"
                name="variant.title"
              >
                <option value="" selected>Μεταβλητή</option>
              </select>
            </div>
          </div>
          <div id="variant.value" class="form-group col-5">
            <div v-for-key="$errors.variant.value"></div>
            <label class="col-form-label" for="variant.value"
              >Τιμή Μεταβλητής</label
            >
            <div v-if="$error.value" class="col-form-"></div>
            <strong class="text-danger">{{
              $errors.first("variant.value")
            }}</strong>

            <div class="input-group">
              <input
                type="text"
                value=""
                class="form-control"
                name="variant.value"
                required
              />
              <span class="input-group-addon">
                {{-- <span class="glyphicon glyphicon-home"></span> --}}
              </span>
            </div>
          </div>
          <div class="col mt-4">
            <div class="">
              <button type="button" id="add" class="btn btn-primary">
                {{ "New Variant" }}
              </button>
            </div>
          </div>
        </div>
        <tbody></tbody>
      </div>
    </div>
  </div>
</template>


<script>
export default {
    methods: {
        getProductBody (product) {
            let body = this.stripTags(product.body);

            return body.length > 300 ? body.substring(0, 300) + '...' : body;
        },

        stripTags (text) {
            return text.replace(/(<([^>]+)>)/ig, '');
        }
    }
}
</script>
