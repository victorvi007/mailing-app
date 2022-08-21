<div class="relative z-10  addEmail " aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <!--
      Background backdrop, show/hide based on modal state.

      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed z-10 inset-0 overflow-y-auto">
      <div class="flex items-center sm:items-center justify-center min-h-full p-4 text-center sm:p-0">

        <form action="{{ route('add_email') }}" method="post" class="relative bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full ">
          <div class="text-end mx-8 px-4 mt-4 text-2xl hideAddEmail">
            <button>
              <i class="fas fa-times"></i>
            </button>
          </div>
          <div class="bg-white px-4  pb-4 sm:p-6 sm:pb-4">

                    @csrf
                  <div class="sm:flex sm:items-start">

                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                      <h3 class="text-lg leading-6 font-medium text-gray-900 text-center" id="modal-title">Add Email</h3>
                      <div class="mt-2 ">

                          <input type="text" name="name" id="" class="w-full h-14 border-b-2 my-4 pl-1 outline-0 border-b-primary" placeholder="Add a Name">
                          <input type="email" name="email" id="" class="w-full h-14 border-b-2 my-4 pl-1 outline-0 border-b-primary" placeholder="Add Email">
                      </div>
                    </div>
                  </div>

          </div>
          <div class="bg-gray-50 px-4 py-3 text-center">
            <button type="submit" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-primary text-base font-medium text-white hover:bg-primary-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm my-1"> <i class="fas fa-user-plus m-1"></i> Add Email</button>
          </div>
        </form>
      </div>
    </div>
</div>
