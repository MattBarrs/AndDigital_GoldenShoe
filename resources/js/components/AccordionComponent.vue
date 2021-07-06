<template>
    <VueFaqAccordion
        :items="myItems"
    />
</template>

<script>
import VueFaqAccordion from 'vue-faq-accordion'

export default {
    components: {
        VueFaqAccordion
    },
    data () {
        return {
            myItems: [
                {
                    title: "Men's Shoes Size Guide",
                    value: '<img src="/images/size_guide/men.png" style="width:100%;height:100%;"/> ',
                },
                {
                    title: "Women's Shoes Size Guide",
                    value: '<img src="/images/size_guide/women.png" style="width:100%;height:100%;"/> ',
                }
            ]
        }
    }
}
</script>
