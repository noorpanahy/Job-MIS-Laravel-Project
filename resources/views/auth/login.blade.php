<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">

            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <x-form-field>

                  <x-form-field>

                    <x-form-label for="Email">Email</x-form-label>
                    <div class="mt-2">
                      <x-form-input name="Email" id="Email" type="email" required/>

                      <x-form-error name="Email" />
                    </div>
                  </x-form-field>
                  <br>

                    <x-form-field>

                        <x-form-label for="Password">Password</x-form-label>
                        <div class="mt-2">
                          <x-form-input name="Password" id="Password" type="password" required/>

                          <x-form-error name="Password" />
                        </div>
                      </x-form-field>


              </x-form-field></div></div></div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
          <x-form-button>Register</x-form-button>
        </div>
      </form>



</x-layout>
