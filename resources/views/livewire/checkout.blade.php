<div>
   <div class="py-10 2xl:py-12 border-t border-opacity-100 bg-white dark:bg-gray-700 mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
      <div x-data="{
         address:false,
         schedule:false,
         number:false,
         new_address:false,
         new_phone:false,
      }" class="flex xl:max-w-screen-xl mx-auto flex-col">
         <div class="flex flex-col lg:grid lg:grid-cols-12 grid-cols-1 flex-wrap gap-8">
            <div class="w-full col-start-1 col-end-9">
               <div class="border border-opacity-100 border-gray-300 bg-opacity-100 rounded-md">
                  <div class="border-b border-opacity-100">
                     <div id="index_0" class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">1</span>
                        <h3 class=" text-15px sm:text-base font-semibold text-green-500">Delivery Address</h3>
                     </div>
                     <div class="px-5 sm:px-9 lg:px-20 sm:pr-9 pr-5 pb-6">
                        <div class="mb-6">
                           <div class="text-15px h-full flex flex-col justify-between -mt-4 md:mt-0">
                              <div class="md:grid md:grid-cols-2 md:gap-5 auto-rows-auto space-y-4 md:space-y-0">
                                 <label class="sr-only">address</label>
                                 <div role="button" @click.prevent="address=1" class="border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group" :class="address==1 ? 'border-green-300' : 'bg-gray-100 border-transparent'">
                                    <h3 class=" font-semibold mb-2 -mt-1" id="headlessui-label-44">Home</h3>
                                    <div class="text-skin-muted leading-6">Wolfson Institute of Preventive Medicine, London EC1M 7BA, UK</div>
                                    <div class="flex absolute right-3 top-3 z-10 transition-all ">
                                       <button class="flex justify-center items-center bg-green-400 h-6 w-6 rounded-full text-white text-opacity-80 text-sm lg:opacity-0 lg:group-hover:opacity-100">
                                          <span class="sr-only">Home</span>
                                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                          </svg>
                                       </button>
                                    </div>
                                 </div>
                                 <div role="button" @click.prevent="address=2" class="border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group" :class="address==2 ? 'border-green-300' : 'bg-gray-100 border-transparent'">
                                    <h3 class=" font-semibold mb-2 -mt-1" id="headlessui-label-48">Office</h3>
                                    <div class="text-skin-muted leading-6" id="headlessui-description-49">80 Windsor Park Rd, Singapore 574175</div>
                                    <div class="flex absolute right-3 top-3 z-10 transition-all ">
                                       <button class="flex justify-center items-center bg-green-400 h-6 w-6 rounded-full text-white text-opacity-80 text-sm lg:opacity-0 lg:group-hover:opacity-100">
                                          <span class="sr-only">Home</span>
                                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                          </svg>
                                       </button>
                                    </div>
                                 </div>
                                 <button x-show="!new_address" @click="new_address=true" class="w-full border-2 hover:border-green-300 transition-all border-opacity-100 rounded font-semibold p-5 px-10 cursor-pointer flex justify-start hover:border-skin-primary items-center min-h-[112px] h-full hover:text-green-500" role="none">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1551322312294" viewBox="0 0 1024 1024" version="1.1" class="mr-2" height="18" width="18" xmlns="http://www.w3.org/2000/svg" role="none">
                                       <defs role="none"></defs>
                                       <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z" role="none"></path>
                                       <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z" role="none"></path>
                                    </svg>
                                    Add Address
                                 </button>
                                 <div x-cloak x-show="new_address" class="">
                                    <form method="POST" class="space-y-4">
                                       <div class="space-y-1.5">
                                          <label for="type_address" class="block tracking-wider">Address Type</label>
                                          <input class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700" placeholder="Home" id="type_address" type="text" name="address" required autofocus>
                                       </div>
                                       <div class="space-y-1.5">
                                          <label for="description" class="block tracking-wider">Address Description</label>
                                          <textarea class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700" placeholder="description" type="description" id="description"></textarea>
                                       </div>
                                       <div class="text-right">
                                          <button @click="new_address = false" class="px-6 py-2 border-none border hover:bg-opacity-80">Cancel</button>
                                          <button type="submit" class="px-6 py-2 border-none border bg-gray-700 hover:bg-opacity-80 text-white">Add Address</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="border-b border-opacity-100">
                     <div id="index_1" class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">2</span>
                        <h3 class=" text-15px sm:text-base font-semibold text-green-500">Delivery Schedule</h3>
                     </div>
                     <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 md:gap-5 px-20 pb-10" role="none">
                        <div>
                           <div @click.prevent="schedule=1" class="relative p-4 rounded border cursor-pointer group hover:border-green-300" :class="schedule==1 ? 'border-green-300 shadow-sm' : 'bg-gray-100 border-transparent'">
                              <span class="text-sm  font-semibold block mb-2">Express Delivery</span>
                              <span class="text-sm  block">90 min express delivery</span>
                           </div>
                        </div>
                        <div>
                           <div @click.prevent="schedule=2" class="relative p-4 rounded border cursor-pointer group hover:border-green-300" :class="schedule==2 ? 'border-green-300 shadow-sm' : 'bg-gray-100 border-transparent'">
                              <span class="text-sm  font-semibold block mb-2">Morning</span>
                              <span class="text-sm  block">8.00 AM - 11.00 AM</span>
                           </div>
                        </div>
                        <div>
                           <div @click.prevent="schedule=3" class="relative p-4 rounded border cursor-pointer group hover:border-green-300" :class="schedule==3 ? 'border-green-300 shadow-sm' : 'bg-gray-100 border-transparent'">
                              <span class="text-sm  font-semibold block mb-2">Noon</span>
                              <span class="text-sm  block">11.00 AM - 2.00 PM</span>
                           </div>
                        </div>
                        <div>
                           <div @click.prevent="schedule=4" class="relative p-4 rounded border cursor-pointer group hover:border-green-300" :class="schedule==4 ? 'border-green-300 shadow-sm' : 'bg-gray-100 border-transparent'">
                              <span class="text-sm  font-semibold block mb-2">Afternoon</span>
                              <span class="text-sm  block">2.00 PM - 5.00 PM</span>
                           </div>
                        </div>
                        <div>
                           <div @click.prevent="schedule=5" class="relative p-4 rounded border cursor-pointer group hover:border-green-300" :class="schedule==5 ? 'border-green-300 shadow-sm' : 'bg-gray-100 border-transparent'">
                              <span class="text-sm  font-semibold block mb-2">Evening</span>
                              <span class="text-sm  block">5.00 PM - 8.00 PM</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="border-b border-opacity-100">
                     <div class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">3</span>
                        <h3 class=" text-15px sm:text-base font-semibold text-green-500">Contact Number</h3>
                     </div>
                     <div class="px-5 sm:px-9 lg:px-20 sm:pr-9 pr-5 pb-6">
                        <div class="mb-6">
                           <div class="w-full max-w-[1300px] mx-auto">
                              <div class="flex flex-wrap">
                                 <div class="w-full">
                                    <div class="text-[15px] ">
                                       <div class="grid grid-cols-1 md:grid-cols-2 gap-5 auto-rows-auto" id="headlessui-radiogroup-50">
                                          <label class="sr-only" id="headlessui-label-51" role="none">Default</label>
                                          <div role="button" @click.prevent="number=1" class="border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group" :class="number==1 ? 'border-green-300' : 'bg-gray-100 border-transparent'">
                                             <h3 class=" font-semibold mb-2 -mt-1" id="headlessui-label-44">Primary Number</h3>
                                             <div class="text-skin-muted leading-6">+8801781844900</div>
                                             <div class="flex absolute right-3 top-3 z-10 transition-all ">
                                                <button class="flex justify-center items-center bg-green-400 h-6 w-6 rounded-full text-white text-opacity-80 text-sm lg:opacity-0 lg:group-hover:opacity-100">
                                                   <span class="sr-only">Home</span>
                                                   <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                                   </svg>
                                                </button>
                                             </div>
                                          </div>
                                          <div role="button" @click.prevent="number=2" class="border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group" :class="number==2 ? 'border-green-300' : 'bg-gray-100 border-transparent'">
                                             <h3 class=" font-semibold mb-2 -mt-1" id="headlessui-label-44">Primary Number</h3>
                                             <div class="text-skin-muted leading-6">+8801781844900</div>
                                             <div class="flex absolute right-3 top-3 z-10 transition-all ">
                                                <button class="flex justify-center items-center bg-green-400 h-6 w-6 rounded-full text-white text-opacity-80 text-sm lg:opacity-0 lg:group-hover:opacity-100">
                                                   <span class="sr-only">Home</span>
                                                   <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M21 6.879l-3.879-3.879c-.293-.293-.678-.439-1.061-.439-.384 0-.767.146-1.06.439l-10.939 10.939c-.293.293-.558.727-.75 1.188-.192.463-.311.959-.311 1.373v4.5h4.5c.414 0 .908-.119 1.371-.311.463-.192.896-.457 1.189-.75l10.94-10.939c.293-.293.439-.678.439-1.061 0-.384-.146-.767-.439-1.06zm-15.232 8.182l8.293-8.293 1.232 1.232-8.293 8.293-1.232-1.232zm1.732 3.939h-1.5l-1-1v-1.5c0-.077.033-.305.158-.605.01-.02 2.967 2.938 2.967 2.938-.322.134-.548.167-.625.167zm1.439-.768l-1.232-1.232 8.293-8.293 1.232 1.232-8.293 8.293zm9-9l-3.172-3.172 1.293-1.293 3.17 3.172-1.291 1.293z"></path>
                                                   </svg>
                                                </button>
                                             </div>
                                          </div>
                                          <button x-show="!new_phone" @click="new_phone=true" class="w-full border-2 hover:border-green-300 transition-all border-opacity-100 rounded font-semibold p-5 px-10 cursor-pointer flex justify-start hover:border-skin-primary items-center min-h-[112px] h-full hover:text-green-500" role="none">
                                             <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1551322312294" viewBox="0 0 1024 1024" version="1.1" class="mr-2" height="18" width="18" xmlns="http://www.w3.org/2000/svg" role="none">
                                                <defs role="none"></defs>
                                                <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z" role="none"></path>
                                                <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z" role="none"></path>
                                             </svg>
                                             Add Phone Number
                                          </button>
                                          <div x-cloak x-show="new_phone" class="">
                                             <form method="POST" class="space-y-4">
                                                <div class="space-y-1.5">
                                                   <label for="type_address" class="block tracking-wider">Number Type</label>
                                                   <input class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700" placeholder="Home" id="type_address" type="text" name="address" required autofocus>
                                                </div>
                                                <div class="space-y-1.5">
                                                   <label for="description" class="block tracking-wider">Number Description</label>
                                                   <textarea class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700" placeholder="description" type="description" id="description"></textarea>
                                                </div>
                                                <div class="text-right">
                                                   <button @click="new_phone = false" class="px-6 py-2 border-none border hover:bg-opacity-80">Cancel</button>
                                                   <button type="submit" class="px-6 py-2 border-none border bg-gray-700 hover:bg-opacity-80 text-white">Add Phone Number</button>
                                                </div>
                                             </form>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="border-b border-opacity-100">
                     <div class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">4</span>
                        <h3 class=" text-15px sm:text-base font-semibold text-green-500">Payment Option</h3>
                     </div>
                     <div class="px-5 sm:px-9 lg:px-20 sm:pr-9 pr-5 pb-6 ">
                        <div class="mb-6">
                           <div class="w-full bg-white rounded-xl xl:w-[500px]">
                              <h3 class=" opacity-60 mb-3">Enter card info</h3>
                              <div class="StripeElement StripeElement--empty">
                                 <div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;">
                                    <iframe scrolling="no" allow="payment *" src="https://js.stripe.com/v3/elements-inner-card-93c7d6cff5a6ff1aaffc0f07e72a14bd.html#wait=false&amp;mids[guid]=c44f3049-ddaa-4d76-ad25-c457709b2cd7c33f8b&amp;mids[muid]=f877ea9e-873f-4271-bb1a-294e8a5503ffe53930&amp;mids[sid]=e9b189b6-3556-4a08-8e9c-c504abb1dc25f89bc3&amp;rtl=false&amp;componentName=card&amp;keyMode=test&amp;apiKey=pk_test_51JUDYDHE5OSjrvPugQ9mmxXvbKTVeN3ylicpta7qLBbKhLJ46qN2SxIzYLUN1rKsK2ZBeNl3jImSgnBdVXIuaWFX00xFdlgcUP&amp;referrer=https%3A%2F%2Fborobazar.vercel.app%2Fcheckout&amp;controllerId=__privateStripeController4281" title="Secure card payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; height: 16.8px;"></iframe>
                                    <input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="border-b border-opacity-100">
                     <div id="index_4" class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">5</span>
                        <h3 class=" text-15px sm:text-base font-semibold text-green-500">Delivery Instructions (optional)</h3>
                     </div>
                     <div data-aria-label="index_4" class="px-5 sm:px-9 lg:px-20 sm:pr-9 pr-5 pb-6 ">
                        <div class="mb-6">
                           <div class="w-full">
                              <div class="w-full  mx-auto">
                                 <form novalidate="">
                                    <div class="mb-6">
                                       <div>
                                          <label for="instructionNote" class="block  opacity-70 font-normal text-13px lg:text-sm leading-none mb-3 cursor-pointer">Delivery Instructions Note</label>
                                          <textarea id="instructionNote" name="instructionNote" class="px-4 py-3 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-[13px] lg:text-sm focus:outline-none focus:ring-0 placeholder-[#B3B3B3] bg-white border focus:shadow focus:border-2 border-gray-400 focus:border-green-300" autocomplete="off" spellcheck="false" rows="4" placeholder="e.g: Leave at my door if I am not around"></textarea>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="w-full mt-7 lg:mt-0 col-start-9 col-end-13">
               <div class="border border-opacity-100 bg-opacity-100 rounded-md py-1 xl:py-6 px-4 xl:px-7">
                  <div class="flex p-4 rounded-md mt-4 bg-gray-200 text-sm font-semibold ">
                     <span>Product</span>
                     <span class="ml-auto flex-shrink-0">Subtotal</span>
                  </div>
                  @foreach ($products as $product)
                  <div wire:loading.attr="disabled" wire:key="{{ $product->rowId }}" class="flex py-4 items-center  border-b border-opacity-100 ">
                     <div class="flex border rounded-md border-opacity-100  w-16 h-16 flex-shrink-0">
                        <div style="display: inline-block; max-width: 100%; overflow: hidden; position: relative; box-sizing: border-box; margin: 0px;" class="group">
                           <div style="box-sizing: border-box; display: block; max-width: 100%;">
                              <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmVyc2lvbj0iMS4xIi8+" style="max-width: 100%; display: block; margin: 0px; border: none; padding: 0px;">
                           </div>
                           <img alt="item image" src="{{ asset('images/') }}/{{$product->options->image}}" class="rounded-md mr-5" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                           <div wire:click="RemoveFromCart('{{ $product->rowId }}')" class="absolute top-0 start-0 h-full w-full bg-black bg-opacity-30 md:bg-opacity-0 flex justify-center items-center transition duration-200 ease-in-out md:group-hover:bg-opacity-30 cursor-pointer">
                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="relative text-white text-2xl transform md:scale-0 md:opacity-0 transition duration-300 ease-in-out md:group-hover:scale-100 md:group-hover:opacity-100" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm52.7 283.3L256 278.6l-52.7 52.7c-6.2 6.2-16.4 6.2-22.6 0-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3l52.7-52.7-52.7-52.7c-3.1-3.1-4.7-7.2-4.7-11.3 0-4.1 1.6-8.2 4.7-11.3 6.2-6.2 16.4-6.2 22.6 0l52.7 52.7 52.7-52.7c6.2-6.2 16.4-6.2 22.6 0 6.2 6.2 6.2 16.4 0 22.6L278.6 256l52.7 52.7c6.2 6.2 6.2 16.4 0 22.6-6.2 6.3-16.4 6.3-22.6 0z">
                                 </path>
                              </svg>
                           </div>
                        </div>
                     </div>
                     <h6 class="text-15px  font-normal px-3">{{ $product->name }} - {{ $product->weight }}oz<span class="ml-1 font-semibold text-gray-500">x {{ $product->qty }}</span></h6>
                     <div class="flex ml-auto text-15px  font-normal  px-2 flex-shrink-0">{{ env('CURRENCY').$product->price*$product->qty }}</div>
                  </div>
                  @endforeach
                  <div class="flex items-center py-4 lg:py-5 border-b border-opacity-100 text-sm w-full text-15px  font-medium  last:border-b-0 last:text-base last:pb-0">Subtotal
                     <span class="ml-auto flex-shrink-0 text-15px  font-bold">{{ env('CURRENCY').$sub_total }}</span>
                  </div>
                  <div class="flex items-center py-4 lg:py-5 border-b border-opacity-100 text-sm w-full text-15px  font-medium  last:border-b-0 last:text-base last:pb-0">Shipping
                     <span class="ml-auto flex-shrink-0 text-15px  font-bold">$0</span>
                  </div>
                  <div class="flex items-center py-4 lg:py-5 border-b border-opacity-100 text-sm w-full text-15px  font-medium  last:border-b-0 last:text-base last:pb-0">Total
                     <span class="ml-auto flex-shrink-0 text-15px  font-bold">{{ env('CURRENCY').$sub_total }}</span>
                  </div>
                  <button class="inline-flex items-center justify-center flex-shrink-0 font-semibold leading-none rounded outline-none transition duration-300 ease-in-out focus:outline-none focus:shadow focus:ring-1 focus:ring-green-700 bg-green-400 text-light border border-transparent hover:bg-green-hover px-5 py-0 h-12 w-full mt-5 text-white">Order Now</button>
               </div>
               <p class="text-skin-muted text-sm leading-7 lg:leading-[27px] lg:text-15px mt-8">By placing your order, you agree to be bound by the " {{env('APP_NAME')}} "
                  <a class="text-skin-primary underline font-medium" href="#">Terms of Service </a>and
                  <a class="text-skin-primary underline font-medium" href="#">Privacy</a>. Your credit/debit card data will not saved.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>