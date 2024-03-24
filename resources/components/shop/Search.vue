<template>
    <section class="search-overlay">
        <div class="container search-container">
            <div class="py-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead lh-1 m-0 fw-bold">What are you looking for?</p>
                    <button class="btn btn-light btn-close-search"><i class="ri-close-circle-line align-bottom"></i> Close search</button>
                </div>
                
                <input type="text" class="form-control" id="searchForm" placeholder="Search by product or category name..." v-model="search" @input="searchProducts">             
                
                <div class="my-5">
                    <p v-if="search" class="lead fw-bolder">{{products.length}} results found for <span class="fw-bold">"{{search}}"</span></p>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0" v-for="(product, index) in products">
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
                </div>
                <div class="bg-dark p-4 text-white">
                    <p class="lead m-0W">Didn't find what you are looking for? <a class="transition-all opacity-50-hover text-white text-link-border border-white pb-1 border-2" href="#">Send us a message.</a></p>
                </div>
            </div>
        </div>
    </section>
</template>

<script setup>
import { ref, computed } from "vue";

const products = ref([])
const search = ref("");

var timer;
const countClick =  ref(0);


function startTimer() {

  timer = setTimeout(() => {
    if(search.value != ""){
        axios({
            method: 'post',
            url: '/shop/xhr_search',
            data: {search:search.value}
        }).then((respons) => {
            if (respons.status == "201")
                products.value = respons.data.products
        });
    }
  }, 500);
}

function searchProducts() {
    clearTimeout(timer);
    startTimer();
}

</script>