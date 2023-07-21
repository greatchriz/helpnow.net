<x-layouts.frontend>
    <section class="relative py-36 lg:py-44 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 pb-8">

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="pt-6 pb-6 px-2 rounded-lg border-t-8 border-indigo-600 bg-white dark:bg-slate-900 shadow-lg dark:shadow-gray-800">
                        <div class="mb-6 text-center">
                            <h4 class="font-bold lg:leading-normal leading-normal text-3xl mb-3">Make a Donation</h4>
                            <p class="text-slate-400">To make a donation toward this cause, please use the following Crypto currency Wallet details of your choice.</p>

                            <p class="text-slate-400 mt-2">Bitcoin Wallet Address: <span class="text-sm text-indigo-600 font-bold" style="word-wrap: break-word;">bc1qqfwpgqdzulhpuwg0e260gflevm8z4at95tsx6h</span></p>

                            <p class="text-slate-400 mt-2">USDT Trc20 Wallet Address:  <span class="text-sm text-indigo-600 font-bold" style="word-wrap: break-word;">TUWKyCf9uFvs2dAJF8L7UkD3w5u6SVrwdy</span></p>

                            <p class="text-slate-400 mt-2">USDT Erc20 Wallet Address:  <span class="text-sm text-indigo-600 font-bold" style="word-wrap: break-word;">0xB6114101b64dA83fa8c7BdAE49bFa4eEF22404f7</span></p>

                        </div>

                        <form>
                            <div class="grid grid-cols-1">
                                <div>
                                    <div class="grid md:grid-cols-2">
                                        <div class="mb-5">
                                            <label class="form-label font-medium">Your Name : <span class="text-red-600">*</span></label>
                                            <input type="text" class="form-input mt-2" placeholder="Name" name="name" required="">
                                        </div>

                                        <div class="mb-5">
                                            <label class="form-label font-medium">Your Email : <span class="text-red-600">*</span></label>
                                            <input type="email" class="form-input mt-2" placeholder="Email" name="email" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <label class="form-label font-medium">I Want to Donate for</label>

                                </div>

                                <div class="m-2 border p-2">
                                    <label class="form-label font-medium">
                                        Food for orphan
                                    </label>

                                    <input type="radio" class="form-radio mt-2" name="donate_reason" value="Food for orphan" checked="">


                                </div>

                                <div class="m-2 border p-2">
                                    <label class="form-label font-medium">
                                        Home for Homeless
                                    </label>

                                    <input type="radio" class="form-radio mt-2" name="donate_reason" value="Home for Homeless" checked="">


                                </div>


                                <div class="m-2 border p-2">
                                    <label class="form-label font-medium">
                                        Clean Water in Africa.
                                    </label>

                                    <input type="radio" class="form-radio mt-2" name="donate_reason" value="Clean Water in Africa" checked="">


                                </div>


                                <div class="mb-5">
                                    <label class="form-label small fw-bold">How much do you want to donate ?</label>
                                    <div class="relative mt-2">
                                        <span class="absolute top-0.5 lstart-0.5 w-9 h-9 text-xl bg-gray-200 dark:bg-slate-700 inline-flex justify-center items-center text-dark dark:text-white rounded" id="basic-addon1"><i class="uil uil-usd-circle"></i></span>
                                        <input type="number" class="form-input ps-12" min="1" max="5000000000000" placeholder="Enter Amount" id="amount" aria-describedby="inputGroupPrepend" required="">
                                    </div>
                                </div><!--end col-->

                                <div class="mb-5">
                                    <div class="flex items-center w-full mb-0">
                                        <input class="form-checkbox text-indigo-600 rounded w-4 h-4 me-2 border border-inherit" type="checkbox" value="" id="AcceptT&amp;C">
                                        <label class="form-check-label text-slate-400" for="AcceptT&amp;C">I Accept <a href="#" class="text-indigo-600">Terms And Condition</a></label>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <input type="submit" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full" value="Donate Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layouts.frontend>
