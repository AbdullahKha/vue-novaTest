<template>
    <div>
        <h3 class="text-sm uppercase tracking-wide text-80 bg-30 p-3">
            {{ filter.name }}
        </h3>

        <div class="p-2">
            <div  id="mx-datepicker-body" class="bg-90 flex flex-col items-left justify-left"
                  style="min-height: 100px;background-color:whitesmoke">

                <date-picker v-model="range" placeholder="Date" lang="en" range type="date" format="YYYY-MM-dd" width="400"></date-picker>


            </div>

        </div>
    </div>
</template>

<script>
    import DatePicker from 'vue2-datepicker';
    import 'vue2-datepicker/index.css';
export default {
    props: {
        resourceName: {
            type: String,
            required: true,
        },
        filterKey: {
            type: String,
            required: true,
        },
    },

    methods: {
        handleChange(event) {
            this.$store.commit(`${this.resourceName}/updateFilterState`, {
                filterClass: this.filterKey,
                value: event.target.value,
            })

            this.$emit('change')
        },
    },

    computed: {
        filter() {
            return this.$store.getters[`${this.resourceName}/getFilter`](
                this.filterKey
            )
        },

        value() {
            return this.filter.currentValue
        },
    },
    components: {
      DatePicker
    },
    data () {
        return {


            range:'',

        }
    }
}
</script>
