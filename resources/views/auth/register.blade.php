<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto max-w-sm px-4 py-8">
    <h1 class="text-2xl font-bold text-center mb-6">Parkroad Felowwship</h1>

    <form action="{{ route('register') }}" method="post" class="space-y-4">
        @csrf
        <div class="flex flex-col">
            <label for="Application date" class="text-sm mb-2">Application Date</label>
            <input type="text" id="application_date" name="application_date"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('application_date') border-red-500 @enderror"
                value="{{ old('application_date') }}" placeholder="application_date">


            {{-- error message --}}
            @error('first_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="flex flex-col">
            <label for="membership_applied_for" class="text-sm mb-2">Membership Applied For</label>
            <input type="text" id="membership_applied_for" name="membership_applied_for"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('membership_applied_for') border-red-500 @enderror"
                value="{{ old('membership_applied_for') }}" placeholder="membership_applied_for">

            {{-- error message --}}
            @error('first_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="flex flex-col">
            <label for="first_name" class="text-sm mb-2">First Name</label>
            <input type="text" id="first_name" name="first_name"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('first_name') border-red-500 @enderror"
                value="{{ old('first_name') }}" placeholder="first_name">

            {{-- error message --}}
            @error('first_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>




        <div class="flex flex-col">
            <label for="last_name" class="text-sm mb-2">Last Name</label>
            <input type="text" id="last_name" name="last_name"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('last_name') border-red-500 @enderror"
                value="{{ old('last_name') }}" placeholder="last_name">

            {{-- error message --}}
            @error('last_name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="postal_address" class="text-sm mb-2">Postal Address</label>
            <input type="postal_address" id="postal_address" name="postal_address"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('postal_address') border-red-500 @enderror"
                value="{{ old('postal_address') }}" placeholder="postal_address">

            {{-- error message --}}
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="email" class="text-sm mb-2">Email</label>
            <input type="email" id="email" name="email"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                value="{{ old('email') }}" placeholder="Email">

            {{-- error message --}}
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="flex flex-col">
            <label for="contact_info" class="text-sm mb-2">Contact</label>
            <input type="contact_info" id="contact_info" name="contact_info"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('contact_info') border-red-500 @enderror"
                value="{{ old('contact_info') }}" placeholder="contact_info">

            {{-- error message --}}
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="flex flex-col">
            <label for="marital_status" class="text-sm font-medium mb-2">Marital Status:</label>
            <select
                class="appearance-none rounded-md border border-gray-300 px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 w-full"
                id="marital_status" name="marital_status" required>
                <option value="">Choose...</option>
                <option value="single">Single</option>
                <option value="married">Married</option>
                <option value="widowed">Widowed</option>
                <option value="divorced">Divorced</option>
            </select>
        </div>

        <div class="flex flex-col">
            <label for="date_of_alvation" class="text-sm mb-2">Date of salvation</label>
            <input type="date_of_salvation" id="date_of_salvation " name="date_of_salvation"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>



        <div class="flex flex-col">
            <label for="Where_do_you_go_to_Church" class="text-sm mb-2">Where do you go to Church?</label>
            <input type="Where_do_you_go_to_Church" id="Where_do_you_go_to_Church" name="Where_do_you_go_to_Church"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>

        <div class="flex flex-col">
            <label for="Name_of_your_pastor" class="text-sm mb-2">Name of your Pastor</label>
            <input type="Name_of_your_pastor" id="Name_of_your_pastor" name="Name_of_your_pastor"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>

        <div class="flex items-center">
            <label for="serves_in_church" class="text-sm font-medium mr-2">Do you serve in Church?</label>
            <div class="flex items-center space-x-2">
                <input type="radio" id="serves_in_church_yes" name="serves_in_church" value="yes"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="serves_in_church_yes" class="text-sm">Yes</label>
                <input type="radio" id="serves_in_church_no" name="serves_in_church" value="no"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="serves_in_church_no" class="text-sm">No</label>
            </div>
        </div>

        <div class="flex flex-col">
            <label for="department_of_church" class="text-sm mb-2">Which department do you serve in your church and
                what do you do there?</label>
            <input type="dapartment_of_church" id="dapartment_of_church" name="dapartment_of_church"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
            </label>
        </div>



        <div class="flex flex-col">
            <label for="school_or_work" class="text-sm mb-2">Where do you go to school or work</label>
            <input type="school_or_work" id="school_or_work" name="school_or_work"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>

        <div class="flex flex-col">
            <label for="location_of_school_or_work" class="text-sm mb-2">Physical location of your school or work
                place</label>
            <input type="location_of_school_or_work" id="location_of_school_or_work"
                name="location_of_school_or_work"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>


        <div class="flex flex-col">
            <label for="career_path" class="text-sm mb-2">What is your career path or profession</label>
            <input type="career_path" id="career_path" name="career_path"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>

        <div class="flex flex-col">
            <label for="job_or_vocation" class="text-sm mb-2">What is your current job or vocation</label>
            <input type="job_or_vocation" id="job_or_vocation" name="job_or_vocation"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">

        </div>




        <div class="flex flex-col">
            <label for="special_gifts" class="text-sm mb-2">What are your special gifts, skills and talent</label>
            <input type="special_gifts" id="special_gifts" name="special_gifts"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>



        <div class="flex  flex-col">
            <label for="s" class="text-sm font-medium mr-2">Would do you like to recieve our periodic
                information and updates</label>
            <div class="flex items-center space-x-2">
                <input type="radio" id="serves_in_church_yes" name="serves_in_church" value="yes"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="serves_in_church_yes" class="text-sm">Yes</label>
                <input type="radio" id="serves_in_church_no" name="serves_in_church" value="no"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="serves_in_church_no" class="text-sm">No</label>
            </div>
        </div>

        {{--
        <div class="flex  flex-col">
            <label for="s" class="text-sm font-medium mr-2">What is your preferred mode for periodic updates
                and communication?</label>
            <div class="flex flex-direction: column space-x-2">
                <input type="radio" id="receive_updates_yes" name="receive_updates" value="yes"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="receive_updates_yes" class="text-sm">Email</label>
            </div>
            <div class="flex flex-direction: column space-x-2">
                <input type="radio" id="serves_in_church_no" name="receive_updates" value="no"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="serves_in_church_no" class="text-sm">Phone</label>
                <input type="radio" id="serves_in_church_no" name="receive_updates" value="no"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="serves_in_church_no" class="text-sm">Email and Phone</label>
            </div>
        </div> --}}



        {{-- <div class="flex flex-col">
            <label for="s" class="text-sm font-medium mr-2">What is your preferred mode for periodic updates
                and communication?</label>
            <div class=" items-center  flex-wrap">
                <div>
                    <input type="checkbox" id="receive_updates_email" name="receive_updates[]" value="email"
                        class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                    <label for="receive_updates_email" class="text-sm">Tuesday Fellowships</label>
                </div>
                <div>
                    <input type="checkbox" id="receive_updates_phone" name="receive_updates[]" value="phone"
                        class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                    <label for="receive_updates_phone" class="text-sm">Events and Recreational Activities</label>
                </div>
                <div>
                    <input type="checkbox" id="receive_updates_both" name="receive_updates[]" value="both"
                        class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                    <label for="receive_updates_both" class="text-sm">Trainings and Workshop</label>
                </div>
                <div>
                    <input type="checkbox" id="receive_updates_both" name="receive_updates[]" value="both"
                        class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                    <label for="receive_updates_both" class="text-sm">General Meeting Notices,Reports and Official
                        Communiques</label>
                </div>
            </div>
        </div> --}}
        <div class="container mx-auto px-4 py-8">
            <div class="border border-gray-300 rounded-md p-4 ">
                <h2 class="text-lg font-medium mb-2">DECLARATIONS</h2>
                <ul class="list-disc pl-4 text-gray-700">
                    <li>I have carefully and prayerfully read the Fellowship’s Constitution and do abide by all that is
                        stipulated therein.
                    </li>
                    <li>I promise to render whatever services or duty I may be called upon to do as a member of the
                        Fellowship.
                    </li>
                    <li>Friends of the Fellowship are encouraged to join and support in any way that the Lord may
                        direct them.
                    </li>
                    <li>In line with our new constitution, annual membership fee is <strong>Ksh. 500 and life membership
                            is
                            Ksh. 5000</strong>
                    </li>
                    <li>Membership is subject to the approval of the Executive Committee and annual membership has to
                        be renewed annually.
                    </li>
                    <br>
                    <li>The PRF Account information is as follows:-
                    </li>
                    <li>For Cheques and direct deposits:
                    </li>
                    <li><strong>Commercial Bank Of Africa Ltd</strong>
                    </li>
                    <li><strong>6443280017</strong>
                    </li>
                    <li><strong>Wabera Street</strong>
                    </li>
                    <br>
                    <li>MPESA:
                    </li>
                    <li><strong>PAYBILL:4088159</strong>
                    </li>
                    <li><strong>ACCOUNT NO:REG</strong>
                    </li>
                </ul>
            </div>
        </div>


        <div class="flex  flex-col">
            <label for="s" class="text-sm font-medium mr-2">Do you accept and agree to these constitutional
                terms and condition?</label>
            <div class="flex items-center space-x-2">
                <input type="radio" id="terms_and_condition_yes" name="terms_and_condition" value="yes"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="terms_and_condition_yes" class="text-sm">Yes</label>
                <input type="radio" id="serves_in_church_no" name="serves_in_church" value="no"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="serves_in_church_no" class="text-sm">No</label>
            </div>
        </div>

        <button type="submit"
            class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700">Submit</button>
    </form>
</div>
