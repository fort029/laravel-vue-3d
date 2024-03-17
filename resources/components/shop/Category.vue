<template>
    <div class="container">
        <div class="row">

            <!-- Category Aside/Sidebar -->
            <div class="d-none d-lg-flex col-lg-3">
                <div class="pe-4">
                    <!-- Category Aside -->
                    <aside>
                        <!-- Filter Category -->
                        <div class="mb-4">
                            <h2 class="mb-4 fs-6 mt-2 fw-bolder">Category</h2>
                            <nav>
                                <ul class="list-unstyled list-default-text">
                                    <li v-for="(option, key) in categorys" :key="categorys" class="mb-2"><a role="button"
                                            class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                                            @click="filter.category = key"><span><i
                                                    class="ri-arrow-right-s-line align-bottom ms-n1"></i>
                                                {{ option.name }}</span> <span class="text-muted ms-4">({{ option.count
                                                }})</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- / Filter Category-->

                        <!-- Price Filter -->
                        <div class="py-4 widget-filter widget-filter-price border-top">
                            <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                                data-bs-toggle="collapse" href="#filter-price" role="button" aria-expanded="true"
                                aria-controls="filter-price">
                                Price
                            </a>
                            <div id="filter-price" class="collapse show">
                                <div class="filter-price mt-6"></div>
                                <div class="d-flex justify-content-between align-items-center mt-7">
                                    <div class="input-group mb-0 me-2 border">
                                        <span
                                            class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                                        <input type="number" min="00" max="100" step="1" v-model="filter.price[0]"
                                            class="filter-min form-control-sm border flex-grow-1 text-muted border-0">
                                    </div>
                                    <div class="input-group mb-0 ms-2 border">
                                        <span
                                            class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                                        <input type="number" min="00" max="100" step="1" v-model="filter.price[1]"
                                            class="filter-max form-control-sm flex-grow-1 text-muted border-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / Price Filter -->
                    </aside>
                    <!-- / Category Aside-->
                </div>
            </div>
            <!-- / Category Aside/Sidebar -->
            <!-- Category Products-->
            <div class="col-12 col-lg-9">
                <DataView :value="products" paginator :rows="6" layout="grid" :sortOrder="sortOrder"
                    :sortField="sortField">
                    <!-- Top Toolbar-->
                    <template #header>
                        <div class="mb-4 d-md-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-start align-items-center flex-grow-1 mb-4 mb-md-0">
                                <small class="d-inline-block fw-bolder">Filtered by:</small>
                                <ul class="list-unstyled d-inline-block mb-0 ms-2">
                                    <li v-if="filter.category != 'all'"
                                        class="bg-light py-1 fw-bolder px-2 cursor-pointer d-inline-block me-1 small">
                                        Category: {{ filter.category }} <i
                                            class="ri-close-circle-line align-bottom ms-1"
                                            @click="filter.category = 'all'"></i></li>
                                </ul>
                                <span @click="clearFilter()"
                                    class="fw-bolder text-muted-hover text-decoration-underline ms-2 cursor-pointer small">Clear
                                    All</span>
                            </div>
                            <div class="d-flex align-items-center flex-column flex-md-row">
                                <!-- Filter Trigger-->
                                <button
                                    class="btn bg-light p-3 d-flex d-lg-none align-items-center fs-xs fw-bold text-uppercase w-100 mb-2 mb-md-0 w-md-auto"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasFilters"
                                    aria-controls="offcanvasFilters">
                                    <i class="ri-equalizer-line me-2"></i> Filters
                                </button>
                                <!-- Filters Offcanvas-->
                                <div class="offcanvas offcanvas-end d-none" tabindex="-1" id="offcanvasFilters">
                                    <div class="offcanvas-header d-flex align-items-center">
                                        <h5 class="offcanvas-title" id="offcanvasFiltersLabel">Category Filters</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        <div class="d-flex flex-column justify-content-between w-100 h-100">

                                            <!-- Filters-->
                                            <div>
                                                <!-- Filter Category -->
                                                <div class="mb-4">
                                                    <h2 class="mb-4 fs-6 mt-2 fw-bolder">Category</h2>
                                                    <nav>
                                                        <ul class="list-unstyled list-default-text">
                                                            <li v-for="(option, key) in categorys" :key="categorys"
                                                                class="mb-2"><a role="button"
                                                                    class="text-decoration-none text-body text-secondary-hover transition-all d-flex justify-content-between align-items-center"
                                                                    @click="filter.category = key"><span><i
                                                                            class="ri-arrow-right-s-line align-bottom ms-n1"></i>
                                                                        {{ option.name }}</span> <span
                                                                        class="text-muted ms-4">({{ option.count
                                                                        }})</span></a>
                                                            </li>

                                                        </ul>
                                                    </nav>
                                                </div>
                                                <!-- / Filter Category-->

                                                <!-- Price Filter -->
                                                <div class="py-4 widget-filter widget-filter-price border-top">
                                                    <a class="small text-body text-decoration-none text-secondary-hover transition-all transition-all fs-6 fw-bolder d-block collapse-icon-chevron"
                                                        data-bs-toggle="collapse" href="#filter-modal-price"
                                                        role="button" aria-expanded="false"
                                                        aria-controls="filter-modal-price">
                                                        Price
                                                    </a>
                                                    <div id="filter-modal-price" class="collapse">
                                                        <div class="filter-price mt-6"></div>
                                                        <div
                                                            class="d-flex justify-content-between align-items-center mt-7">
                                                            <div class="input-group mb-0 me-2 border">
                                                                <span
                                                                    class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                                                                <input type="number" min="00" max="1000" step="1" v-model="filter.price[0]"
                                                                    class="filter-min form-control-sm border flex-grow-1 text-muted border-0">
                                                            </div>
                                                            <div class="input-group mb-0 ms-2 border">
                                                                <span
                                                                    class="input-group-text bg-transparent fs-7 p-2 text-muted border-0">$</span>
                                                                <input type="number" min="00" max="1000" step="1" v-model="filter.price[1]"
                                                                    class="filter-max form-control-sm flex-grow-1 text-muted border-0">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- / Price Filter -->

                                            </div>
                                            <!-- / Filters-->

                                            <!-- Filter Button-->
                                            <div class="border-top pt-3">
                                                <button type="button"
                                                    class="btn btn-dark mt-2 d-block hover-lift-sm hover-boxshadow w-100"
                                                    data-bs-dismiss="offcanvas" aria-label="Close">Done</button>
                                            </div>
                                            <!-- /Filter Button-->
                                        </div>
                                    </div>
                                </div>
                                <!-- / Filter Trigger-->
                                <div class="dropdown ms-md-2 lh-1 p-3 bg-light w-100 mb-2 mb-md-0 w-md-auto">
                                    <Dropdown class="fs-xs fw-bold text-uppercase text-muted-hover p-0 m-0 d-flex"
                                        v-model="sortKey" :options="sortOptions" optionLabel="label"
                                        placeholder="SORT BY" @change="onSortChange($event)" />
                                </div>
                            </div>
                        </div>
                    </template>
                    <!-- / Top Toolbar-->
                    <!-- Products-->
                    <template #grid="slotProps">
                        <div class="row g-4 mb-5">
                            <div class="col-12 col-sm-6 col-md-4" v-for="(product, index) in slotProps.items"
                                :key="index">
                                <!-- Card Product-->
                                <div class="card position-relative h-100 card-listing hover-trigger">
                                    <span v-if="product.discount" class="badge card-badge bg-secondary">-{{
                                        product.discount }}%</span>
                                    <div class="card-header">
                                        <picture class="position-relative overflow-hidden d-block bg-light">
                                            <img class="w-100 img-fluid position-relative z-index-10" title=""
                                                :src="product.img" alt="">
                                        </picture>
                                        <div class="card-actions">
                                            <span
                                                class="small text-uppercase tracking-wide fw-bolder text-center d-block">SHOW</span>
                                            <template v-if="product.options_decode.size">
                                                <span
                                                    class="small text-uppercase tracking-wide fw-bolder text-center d-block">Available
                                                    size</span>
                                                <div
                                                    class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                    <button class="btn btn-outline-dark btn-sm mx-2"
                                                        v-for="size in product.options_decode.size">{{ size }}</button>
                                                </div>
                                            </template>
                                            <template v-else-if="product.options_decode.color">
                                                <span
                                                    class="small text-uppercase tracking-wide fw-bolder text-center d-block">Available
                                                    color</span>
                                                <div
                                                    class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                    <button class="btn btn-outline-dark btn-sm mx-2"
                                                        v-for="color in product.options_decode.color">{{ color
                                                        }}</button>
                                                </div>
                                            </template>
                                            <template v-else-if="product.options_decode.variant">
                                                <span
                                                    class="small text-uppercase tracking-wide fw-bolder text-center d-block">Available
                                                    variant</span>
                                                <div
                                                    class="d-flex justify-content-center align-items-center flex-wrap mt-3">
                                                    <button class="btn btn-outline-dark btn-sm mx-2"
                                                        v-for="variant in product.options_decode.variant">{{ variant
                                                        }}</button>
                                                </div>
                                            </template>

                                        </div>
                                    </div>
                                    <div class="card-body px-0 text-center">
                                        <div class="d-flex justify-content-center align-items-center mx-auto mb-1">
                                            <!-- Review Stars Small-->
                                            <div class="rating position-relative d-table">
                                                <div class="position-absolute stars"
                                                    :style="'width: ' + (product.rating * 100 / 5) + '%'">
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                    <i class="ri-star-fill text-dark mr-1"></i>
                                                </div>
                                                <div class="stars">
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                    <i class="ri-star-fill mr-1 text-muted opacity-25"></i>
                                                </div>
                                            </div> <span class="small fw-bolder ms-2 text-muted"> {{ product.rating }}
                                                ({{ product.rating_count }})</span>
                                        </div>
                                        <a class="mb-0 mx-2 mx-md-4 fs-p link-cover text-decoration-none d-block text-center"
                                            :href="'/shop/product/' + product.id">{{ product.name }}</a>
                                        <div class="d-flex justify-content-center align-items-center mt-2">
                                            <p class="mb-0 me-2 text-danger fw-bolder">$<span>{{ product.price_discount
                                                    }}</span></p>
                                            <p v-if="product.discount" class="mb-0 text-muted fw-bolder"><s>$<span>{{
                                                        product.price }}</span></s></p>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Card Product-->
                            </div>
                        </div>
                    </template>
                    <!-- / Products-->
                </DataView>
            </div>
            <!-- / Category Products-->
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
import DataView from 'primevue/dataview';
import Dropdown from 'primevue/dropdown';

const props = defineProps(
    {
        category: { type: String, default: "all" }
    })

const all_products = ref([]);
const filter = ref({ "category": props.category, "price": [0, 100] });
const sortKey = ref();
const sortOrder = ref();
const sortField = ref();

const sortOptions = ref([
    { label: 'PRICE: LOW HI', value: 'price_discount' },
    { label: 'PRICE: HI LOW', value: '!price_discount' },
    { label: 'NAME', value: 'name' },
]);
const onSortChange = (event) => {
    const value = event.value.value;
    const sortValue = event.value;

    if (value.indexOf('!') === 0) {
        sortOrder.value = -1;
        sortField.value = value.substring(1, value.length);
        sortKey.value = sortValue;
    }
    else {
        sortOrder.value = 1;
        sortField.value = value;
        sortKey.value = sortValue;
    }
};

function getProducts() {
    axios({
        method: 'post',
        url: '/shop/xhr_products',
        data: {}
    }).then((respons) => {
        if (respons.status == "201")
            all_products.value = respons.data.products
    });
}
function clearFilter() {
    filter.value.category = 'all'
}

const categorys = computed(() => {
    let category = {};
    all_products.value.forEach((data) => {
        if (category[data.category]) {
            category[data.category].count++;
        } else {
            category[data.category] = { name: data.category, count: 1 };
        }
    })
    return category;
});

const products = computed(() => {
    let products = [];
    all_products.value.forEach((data) => {
        let add = true;
        add = (filter.value.category == 'all' || filter.value.category == data.category) ? add : false;
        add = (filter.value.price[0] <= data.price_discount && filter.value.price[1] >= data.price_discount) ? add : false;
        if (add)
            products.push(data);
    })
    return products;
})

onMounted(() => {
    getProducts();
})

</script>