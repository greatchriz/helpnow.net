<x-layouts.frontend>
    <section class="relative py-36 lg:py-44 bg-gray-50 dark:bg-slate-800">
        <div class="container">
            <div class="grid grid-cols-1 pb-8">

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="p-6 rounded-lg border-t-8 border-indigo-600 bg-white dark:bg-slate-900 shadow-lg dark:shadow-gray-800">
                        <div class="mb-6 text-center">
                            <h4 class="font-bold lg:leading-normal leading-normal text-3xl mb-3">Make a Donation</h4>
                            <p class="text-slate-400">To make an offline donation toward this cause, please use the following Crypto currency Wallet details.</p>

                            <p class="text-slate-400 mt-2">Bitcoin Wallet Address: <span class="text-indigo-600">1J5P1YXQ5JQ8z5Q4XhQ2jZx5H6XKQ6XJ5</span></p>

                            <p class="text-slate-400 mt-2">Ethereum Wallet Address: <span class="text-indigo-600">0x4Ee7E1E5D4c4cF3b8d5Bc0bBf1e4f4f8e2f9D2F9</span></p>

                            <p class="text-slate-400 mt-2">Litecoin Wallet Address: <span class="text-indigo-600">Lh7oFgXKs6J6pQc1iYvzr6J6pQc1iYvzr</span></p>

                            <p class="text-slate-400 mt-2">Dogecoin Wallet Address: <span class="text-indigo-600">D6pQc1iYvzr6J6pQc1iYvzr6J6pQc1iYvzr</span></p>
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
                                    <select class="form-select form-input mt-2">
                                        <option value="Donate For Food">Donate For Food</option>
                                        <option value="Food For Orphan">Food For Orphan</option>
                                        <option value="Home For Homeless">Home For Homeless</option>
                                        <option value="Holyday Gifts In Kind">Holyday Gifts In Kind</option>
                                        <option value="For clean Water in Africa">For clean Water in Africa</option>
                                        <option value="Health and Rights">Health and Rights</option>
                                    </select>
                                </div>

                                <div class="mb-5">
                                    <label class="form-label small fw-bold">How much do you want to donate ?</label>
                                    <div class="relative mt-2">
                                        <span class="absolute top-0.5 lstart-0.5 w-9 h-9 text-xl bg-gray-200 dark:bg-slate-700 inline-flex justify-center items-center text-dark dark:text-white rounded" id="basic-addon1"><i class="uil uil-usd-circle"></i></span>
                                        <input type="number" class="form-input ps-12" min="1" max="1000" placeholder="Enter Amount" id="amount" aria-describedby="inputGroupPrepend" required>
                                    </div>
                                </div><!--end col-->

                                <div class="mb-5">
                                    <div class="flex items-center w-full mb-0">
                                        <input class="form-checkbox text-indigo-600 rounded w-4 h-4 me-2 border border-inherit" type="checkbox" value="" id="AcceptT&C">
                                        <label class="form-check-label text-slate-400" for="AcceptT&C">I Accept <a href="#" class="text-indigo-600">Terms And Condition</a></label>
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
