<template>
    <div class="p-4">
        <div class="mt-5 mb-10 text-sm">
            <label for="casino-name" class="block text-black">Casino name</label>
            <input type="text"
                   id="casino-name"
                   class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full"
                   placeholder="bellagio"
                   v-model="casinoName"/>
        </div>
        <div>
            <h3 class="text-xl font-medium">Faq</h3>
            <div class="my-5 text-sm border-b border-gray-200 pb-4 flex flex-col" v-for="(faq, key) in faqs" :key="key">
                <label for="faq" class="block text-black">Question:</label>
                <input type="text"
                       id="faq"
                       class="rounded-sm px-4 py-3 mt-3 focus:outline-none bg-gray-100 w-full mb-4"
                       placeholder="faq everything"
                       v-model="faq.question"/>
                <textarea class="w-full bg-gray-100 p-3 h-20 outline-none" spellcheck="true" v-model="faq.answer" placeholder="answer what you know"></textarea>
                <button v-if="casinoId" @click="deleteFaq(key)" class="bg-red-600 p-2 mt-2 rounded-md ml-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="text-white w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>
            <button @click="addFaq">add faq</button>
        </div>
        <button @click="update">save</button>
    </div>
</template>

<script>
export default {
    props: {
        casinoId: {
            required: false,
            type: Number,
            default: 0
        }
    },

    data:() => ({
        casinoName: '',
        faqs: [],
        /**
         * List of faq id's for deletion
         * @var delete|array
         */
        delete: []
    }),

    methods: {
        /**
         *
         */
        addFaq: function () {
            this.faqs.push({question: '', answer: ''});
        },

        /**
         *
         * @param key
         */
        deleteFaq(key) {
            const faq = this.faqs[key];
            if(faq.hasOwnProperty('id')) {
                this.delete.push(faq.id);
            }
            this.removeFaq(key);
        },

        formData(casinoId) {
            let data = new FormData()

            if(casinoId) data.append('casino_id', casinoId);
            data.append('faqs', this.faqs);
            data.append('delete', this.delete);

            return data;
        },

        /**
         *
         * @param id
         */
        loadCasino(id) {
            fetch(`/casinos/${id}`)
                .then(response => response.json())
                .then(response => {
                    this.populate(response)
                }).catch((error) => {
                console.error('error:', error);
            });
        },

        /**
         *
         * @param data
         */
        populate(data) {
            this.casinoName = data.name;
            this.faqs = data.faqs
        },

        removeFaq: function (id) {
            this.faqs.splice(id, 1);
        },

        save : function(){
            fetch(`/casinos/${id}`)
                .then(response => response.json())
                .then(response => {
                    this.populate(response)
                }).catch((error) => {
                console.error('error:', error);
            });
        },

        update() {
            axios.put(`/casinos/${this.casinoId}/`, {
                data: {
                    id: this.casinoId,
                    faqs: this.faqs,
                    delete: this.delete
                }
            })
                .then(response => {
                  console.log(response.data)
                }).catch((error) => {
                console.error('error:', error);
            });
        }
    },

    created() {
        if(this.casinoId) this.loadCasino(this.casinoId)
    }
};
</script>
