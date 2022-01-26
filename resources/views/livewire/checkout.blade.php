<div>
   <div wire:loading.attr="disabled" class="py-10 2xl:py-12 border-t border-opacity-100 bg-white dark:bg-gray-700 mx-auto max-w-[1920px] px-4 md:px-6 lg:px-8 2xl:px-10">
      <div x-data="{
         address:@entangle('address'),
         schedule:@entangle('schedule'),
         number:@entangle('number'),
         new_address:@entangle('new_address'),
         new_phone:@entangle('new_phone'),
         Payment_Method:@entangle('payment_method'),
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
                                 @foreach (auth()->user()->addresses as $address)
                                 <div role="button" @click.prevent="address={{ $address->id }}" class="border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group" :class="address=={{ $address->id }} ? 'border-green-300' : 'bg-gray-100 border-transparent'">
                                    <h3 class=" font-semibold mb-2 -mt-1">{{ $address->address_type }}</h3>
                                    <div class="text-skin-muted leading-6">{{ $address->address }}</div>
                                    <div class="flex absolute right-3 top-3 z-10 transition-all ">
                                       <button wire:click.prevent="RemoveAddress({{ $address->id }})" class="flex border border-green-400 justify-center items-center h-6 w-6 rounded-full text-green-500 text-opacity-80 text-sm lg:opacity-0 lg:group-hover:opacity-100">
                                          <span class="sr-only">Home</span>
                                          <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                          </svg>
                                       </button>
                                    </div>
                                 </div>
                                 @endforeach
                                 <button x-show="!new_address" @click="new_address=true" class="w-full border-2 hover:border-green-300 transition-all border-opacity-100 rounded font-semibold p-5 px-10 cursor-pointer flex justify-start hover:border-skin-primary items-center min-h-[112px] h-full hover:text-green-500" role="none">
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1551322312294" viewBox="0 0 1024 1024" version="1.1" class="mr-2" height="18" width="18" xmlns="http://www.w3.org/2000/svg" role="none">
                                       <defs role="none"></defs>
                                       <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z" role="none"></path>
                                       <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z" role="none"></path>
                                    </svg>
                                    Add Address
                                 </button>
                                 <div x-cloak x-show="new_address" class="">
                                    <form wire:submit.prevent="NewAddress" method="POST" class="space-y-4">
                                       <div class="space-y-1.5">
                                          <label for="type_address" class="block tracking-wider">Address Type</label>
                                          <input wire:model.defer="address_type" class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700" placeholder="Home" id="type_address" type="text" name="address" required autofocus>
                                       </div>
                                       <div class="space-y-1.5">
                                          <label for="description" class="block tracking-wider">Address Description</label>
                                          <textarea wire:model.defer="address" class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700" placeholder="description" type="description" id="description"></textarea>
                                       </div>
                                       <div class="text-right">
                                          <button @click.prevent="new_address = false" class="px-6 py-2 border-none border hover:bg-opacity-80">Cancel</button>
                                          <button @click="new_address = false" type="submit" class="px-6 py-2 border-none border bg-gray-700 hover:bg-opacity-80 text-white">Add Address</button>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="border-b border-opacity-100">
                     <div class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">2</span>
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
                                          @foreach (auth()->user()->numbers as $number)
                                          <div role="button" @click.prevent="number={{ $number->id }}" class="border-2 relative focus:outline-none rounded-md p-5 block cursor-pointer min-h-[112px] h-full group" :class="number=={{ $number->id }} ? 'border-green-300' : 'bg-gray-100 border-transparent'">
                                             <h3 class=" font-semibold mb-2 -mt-1" id="headlessui-label-44">{{ $number->number_type }}</h3>
                                             <div class="text-skin-muted leading-6">{{ $number->number }}</div>
                                             <div class="flex absolute right-3 top-3 z-10 transition-all ">
                                                <button wire:click.prevent="RemovePhoneNumber({{ $number->id }})" class="flex border border-green-400 justify-center items-center h-6 w-6 rounded-full text-green-500 text-opacity-80 text-sm lg:opacity-0 lg:group-hover:opacity-100">
                                                   <span class="sr-only">Home</span>
                                                   <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1.2" baseProfile="tiny" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                   </svg>
                                                </button>
                                             </div>
                                          </div>
                                          @endforeach
                                          <button x-show="!new_phone" @click="new_phone=true" class="w-full border-2 hover:border-green-300 transition-all border-opacity-100 rounded font-semibold p-5 px-10 cursor-pointer flex justify-start hover:border-skin-primary items-center min-h-[112px] h-full hover:text-green-500" role="none">
                                             <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1551322312294" viewBox="0 0 1024 1024" version="1.1" class="mr-2" height="18" width="18" xmlns="http://www.w3.org/2000/svg" role="none">
                                                <defs role="none"></defs>
                                                <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z" role="none"></path>
                                                <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z" role="none"></path>
                                             </svg>
                                             Add Phone Number
                                          </button>
                                          <div x-cloak x-show="new_phone" class="">
                                             <form wire:submit.prevent="NewNumber" method="POST" class="space-y-4">
                                                <div class="space-y-1.5">
                                                   <label for="type_address" class="block tracking-wider">Number Type</label>
                                                   <input wire:model.defer="number_type" class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700" placeholder="Home" id="type_address" type="text" name="address" required autofocus>
                                                </div>
                                                <div class="space-y-1.5">
                                                   <label for="description" class="block tracking-wider">Number</label>
                                                   <input wire:model="number" type="number" class="border-gray-300 w-full px-3 py-2 rounded dark:bg-transparent dark:ring-gray-700">
                                                </div>
                                                <div class="text-right">
                                                   <button @click.prevent="new_phone = false" class="px-6 py-2 border-none border hover:bg-opacity-80">Cancel</button>
                                                   <button @click="new_phone = false" type="submit" class="px-6 py-2 border-none border bg-gray-700 hover:bg-opacity-80 text-white">Add Number</button>
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
                     <div id="index_1" class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">3</span>
                        <h3 class=" text-15px sm:text-base font-semibold text-green-500">Delivery Schedule</h3>
                     </div>
                     <div class="grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 md:gap-5 px-20 pb-10" role="none">
                        @foreach ($schedules as $schedule)
                        <div>
                           <div @click.prevent="schedule={{ $schedule->id }}" class="relative p-4 rounded border cursor-pointer group hover:border-green-300" :class="schedule=={{ $schedule->id }} ? 'border-green-300 shadow-sm' : 'bg-gray-100 border-transparent'">
                              <span class="text-sm  font-semibold block mb-2">{{ $schedule->schedule_name }}</span>
                              <span class="text-sm  block">{{ $schedule->schedule }}</span>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
                  <div class="border-b border-opacity-100">
                     <div id="index_4" class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">4</span>
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
                                          <textarea wire:model.defer="notes" id="instructionNote" name="instructionNote" class="px-4 py-3 flex items-center w-full rounded appearance-none transition duration-300 ease-in-out text-[13px] lg:text-sm focus:outline-none focus:ring-0 placeholder-[#B3B3B3] bg-white border focus:shadow focus:border-2 border-gray-400 focus:border-green-300" autocomplete="off" spellcheck="false" rows="4" placeholder="e.g: Leave at my door if I am not around"></textarea>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="border-b border-opacity-100">
                     <div class="flex items-center p-4 sm:p-8 cursor-pointer pb-6">
                        <span class="h-9 w-9 flex items-center justify-center rounded-full border-2 border-current text-skin-primary mr-3 font-semibold border-green-300 text-green-500">5</span>
                        <h3 class=" text-15px sm:text-base font-semibold text-green-500">Payment Option</h3>
                     </div>
                     <div class="px-5 sm:px-9 lg:px-20 sm:pr-9 pr-5 pb-6 ">
                        <div class="mb-6">
                           <div class="space-y-1 mb-3">
                              <div class="">
                                 <label for="cash_on_delivery">
                                    <input x-model="Payment_Method" value="0" id="cash_on_delivery" checked type="radio" name="delivery">
                                    <span class="ml-2">Cash On Delivery</span>
                                 </label>
                              </div>
                              <div class="">
                                 <label for="card_payment">
                                    <input x-model="Payment_Method" value="1" id="card_payment" type="radio" name="delivery">
                                    <span class="ml-2">Card Payment</span>
                                 </label>
                              </div>
                           </div>
                           <div x-show="Payment_Method ==1" class="w-full bg-white rounded-xl xl:w-[500px]">
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
                     <a href="{{ route('product.show',$product->options->slug) }}" class="text-15px font-normal px-3 text-blue-400 hover:underline">{{ $product->name }} - <span class="text-gray-500">{{ $product->weight }}oz</span><span class="ml-1 font-semibold text-gray-500">x {{ $product->qty }}</span></a>
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
                  <button wire:click="PlaceOrder()" class="inline-flex items-center justify-center flex-shrink-0 font-semibold leading-none rounded outline-none transition duration-300 ease-in-out focus:outline-none focus:shadow focus:ring-1 focus:ring-green-700 bg-green-400 text-light border border-transparent hover:bg-green-hover px-5 py-0 h-12 w-full mt-5 text-white">Order Now</button>
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