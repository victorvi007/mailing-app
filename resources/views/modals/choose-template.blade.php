<div class="relative z-10  chooseTemplate " aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-center sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

        <div class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
          <div class="text-end mx-8 px-4 mt-4 text-2xl hideChooseTemplate">
            <button>
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="bg-white px-4  pb-4 sm:p-6 sm:pb-4 ">

                    @csrf
                  <div class="">

                    <div class="">

                      <div class="mt-2 ">
                          <input type="text" class="w-full outline-0  " disabled>
                          <h3 class="text-center">Choose Template to preview on</h3>
                        @foreach ($templetes as $templete)

                        <a href="{{ route('preview',[$templete->id, $mail->id]) }}" target"_blank">
                            <button class="w-full h-14 border-b-2 my-4 pl-1 outline-0 border-b-primary bg-primary text-base font-light text-white hover:bg-primary-50 focus:outline-none rounded">
                                {{ $templete->name }}
                            </button>
                                </a>
                        @endforeach


                        {{-- <button class="w-full h-14 border-b-2 my-4 pl-1 outline-0 border-b-primary bg-primary text-base font-light text-white hover:bg-primary-50 focus:outline-none rounded">
                           <a href="">
                               KuCoin
                            </a>
                            </button>
                        <button class="w-full h-14 border-b-2 my-4 pl-1 outline-0 border-b-primary bg-primary text-base font-light text-white hover:bg-primary-50 focus:outline-none rounded">
                           <a href="">
                               Coinbase
                            </a>
                            </button> --}}


                      </div>
                    </div>
                  </div>

          </div>
          {{-- <div class="bg-gray-50 px-4 py-3 text-center">
            <button type="submit" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm my-1"> <i class="fas fa-user-plus m-1"></i> Add Email</button>
          </div> --}}
        </div>
      </div>
    </div>
</div>
