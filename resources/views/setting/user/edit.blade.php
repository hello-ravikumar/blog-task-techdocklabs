<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
              <div class="bg-white shadow-md rounded my-6 p-5">
                <form method="POST" action="{{ route('admin.users.update',$user->id)}}">
                  @csrf
                  @method('put')
                  <div class="flex flex-col space-y-2">
                    <label for="name" class="text-gray-700 select-none font-medium">User Name<span class="text-red-600">*</span></label>
                    <input id="name" type="text" name="name" value="{{ old('name',$user->name) }}"
                      placeholder="Enter name" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                    @error('name')
                      <span class="text-red-600  pt-5 pl-5">{{ $message }}</span>
                    @enderror
                </div>
        
                <div class="flex flex-col space-y-2">
                    <label for="email" class="text-gray-700 select-none font-medium">Email<span class="text-red-600">*</span></label>
                    <input id="email" type="text" name="email" value="{{ old('email',$user->email) }}"
                      placeholder="Enter email" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                    @error('email')
                      <span class="text-red-600  pt-5 pl-5">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="flex flex-col space-y-2">
                    <label for="password" class="text-gray-700 select-none font-medium">Password</label>
                    <input id="password" type="text" name="password" value="{{ old('password') }}"
                      placeholder="Enter password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                    @error('password')
                      <span class="text-red-600  pt-5 pl-5">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="flex flex-col space-y-2">
                    <label for="password_confirmation" class="text-gray-700 select-none font-medium">Confirm Password</label>
                    <input id="password_confirmation" type="text" name="password_confirmation" placeholder="Re-enter password" class="px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    />
                    @error('password_confirmation')
                      <span class="text-red-600  pt-5 pl-5">{{ $message }}</span>
                    @enderror
                </div>

                <h3 class="text-xl my-4 text-gray-600">Role</h3>
                <div class="grid grid-cols-3 gap-4">
                  @foreach($roles as $role)
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col">
                              <label class="inline-flex items-center mt-3">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="roles[]" value="{{$role->id}}"
                                  @if(count($user->roles->where('id',$role->id)))
                                      checked 
                                  @endif
                                  ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach
                </div>
                <div class="text-center mt-16 mb-16">
<button type="submit"
                    class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors ">Update</button>
                </div>
              </div>

             
            </div>
        </main>
    </div>
</div>
</x-app-layout>
