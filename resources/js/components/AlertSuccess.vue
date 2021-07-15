 <template>

     <div v-if="alertOpen" class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-300">
    <span class="text-xl inline-block mr-5 align-middle">
      <i class="fas fa-bell"></i>
    </span>
    <span class="inline-block align-middle mr-8">
         <b class="capitalize">holy smokes!</b> {{ session('message') }}
    </span>
            <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" v-on:click="closeAlert()">
                <span>×</span>
            </button>
        </div>

</template>

    <script>
        export default {
            name: "alert-success",
            data() {
                return {
                    alertOpen: true
                }
            },
            mounted() {
                console.log('Alert is here')
            },
            methods: {
                closeAlert: function(){
                    this.alertOpen = false;
                }
            }
        }
    </script>
