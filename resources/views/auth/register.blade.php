<script src="https://cdn.tailwindcss.com"></script>
<div class="container mx-auto max-w-sm px-4 py-8">
    <h1 class="text-2xl font-bold text-center mb-6">PARKROAD FELLOWSHIP</h1>

    <form action="{{ route('register') }}" method="post" class="space-y-4">
        @csrf
        <div class="flex flex-col">
            <label for="application_date" class="text-sm mb-2">Application Date</label>
            <input type="date" id="application_date" name="application_date"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('application_date') }}" placeholder="Application Date">
        </div>

        <div class="flex flex-col">
            <label for="membership_applied_for" class="text-sm mb-2">Membership Applied For</label>
            <input type="text" id="membership_applied_for" name="membership_applied_for"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('membership_applied_for') }}" placeholder="Membership Applied For">
        </div>

        <div class="flex flex-col">
            <label for="first_name" class="text-sm mb-2">First Name</label>
            <input type="text" id="first_name" name="first_name"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('first_name') }}" placeholder="First Name">
        </div>

        <div class="flex flex-col">
            <label for="last_name" class="text-sm mb-2">Last Name</label>
            <input type="text" id="last_name" name="last_name"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('last_name') }}" placeholder="Last Name">
        </div>

        <div class="flex flex-col">
            <label for="postal_address" class="text-sm mb-2">Postal Address</label>
            <input type="text" id="postal_address" name="postal_address"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('postal_address') }}" placeholder="Postal Address">
        </div>

        <div class="flex flex-col">
            <label for="email" class="text-sm mb-2">Email</label>
            <input type="email" id="email" name="email"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('email') }}" placeholder="Email">
        </div>

        <div class="flex flex-col">
            <label for="contact_info" class="text-sm mb-2">Contact</label>
            <input type="text" id="contact_info" name="contact_info"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('contact_info') }}" placeholder="Contact Info">
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
            <label for="date_of_salvation" class="text-sm mb-2">Date of Salvation</label>
            <input type="date" id="date_of_salvation" name="date_of_salvation"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('date_of_salvation') }}" placeholder="Date of Salvation">
        </div>

        <div class="flex flex-col">
            <label for="where_do_you_go_to_church" class="text-sm mb-2">Where do you go to Church?</label>
            <input type="text" id="where_do_you_go_to_church" name="where_do_you_go_to_church"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('where_do_you_go_to_church') }}" placeholder="Where do you go to Church?">
        </div>

        <div class="flex flex-col">
            <label for="name_of_your_pastor" class="text-sm mb-2">Name of your Pastor</label>
            <input type="text" id="name_of_your_pastor" name="name_of_your_pastor"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('name_of_your_pastor') }}" placeholder="Name of your Pastor">
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
            <input type="text" id="department_of_church" name="department_of_church"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('department_of_church') }}" placeholder="Department of Church">
        </div>

        <div class="flex flex-col">
            <label for="school_or_work" class="text-sm mb-2">Where do you go to school or work</label>
            <input type="text" id="school_or_work" name="school_or_work"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('school_or_work') }}" placeholder="School or Work">
        </div>

        <div class="flex flex-col">
            <label for="location_of_school_or_work" class="text-sm mb-2">Physical location of your school or work
                place</label>
            <input type="text" id="location_of_school_or_work" name="location_of_school_or_work"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('location_of_school_or_work') }}" placeholder="Location of School or Work">
        </div>

        <div class="flex flex-col">
            <label for="career_path" class="text-sm mb-2">What is your career path or profession</label>
            <input type="text" id="career_path" name="career_path"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                value="{{ old('career_path') }}" placeholder="Career Path or Profession">
        </div>





        <div class="flex flex-col">
            <label for="special_gifts" class="text-sm mb-2">What are your special gifts, skills and talents?</label>
            <input type="text" id="special_gifts" name="special_gifts"
                class="px-3 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500"
                placeholder="Your answer">
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-medium mr-2">Would you like to receive our periodic information and
                updates?</label>
            <div class="flex items-center space-x-2">
                <input type="radio" id="receive_updates_yes" name="receive_updates" value="yes"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="receive_updates_yes" class="text-sm">Yes</label>
                <input type="radio" id="receive_updates_no" name="receive_updates" value="no"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="receive_updates_no" class="text-sm">No</label>
            </div>
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-medium mr-2">What is your preferred mode for periodic updates and
                communication?</label>
            <div class="flex flex-col space-y-2">
                <input type="radio" id="email_updates" name="preferred_updates_mode" value="email"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="email_updates" class="text-sm">Email</label>

                <input type="radio" id="phone_updates" name="preferred_updates_mode" value="phone"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="phone_updates" class="text-sm">Phone</label>

                <input type="radio" id="both_updates" name="preferred_updates_mode" value="both"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="both_updates" class="text-sm">Email and Phone</label>
            </div>
        </div>

        <div class="flex flex-col">
            <label class="text-sm font-medium mr-2">What types of updates are you interested in?</label>
            <div class="flex flex-col space-y-2">
                <input type="checkbox" id="tuesday_fellowships" name="interested_updates[]"
                    value="tuesday_fellowships"
                    class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="tuesday_fellowships" class="text-sm">Tuesday Fellowships</label>

                <input type="checkbox" id="events_activities" name="interested_updates[]" value="events_activities"
                    class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="events_activities" class="text-sm">Events and Recreational Activities</label>

                <input type="checkbox" id="trainings_workshops" name="interested_updates[]"
                    value="trainings_workshops"
                    class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="trainings_workshops" class="text-sm">Trainings and Workshops</label>

                <input type="checkbox" id="general_meetings" name="interested_updates[]" value="general_meetings"
                    class="form-checkbox h-5 w-5 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="general_meetings" class="text-sm">General Meeting Notices, Reports and Official
                    Communiques</label>
            </div>
        </div>

        {{-- terms and conditons --}}
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
        {{-- end of terms and conditions --}}

        <div class="flex flex-col">
            <label class="text-sm font-medium mr-2">Do you accept and agree to these constitutional terms and
                conditions?</label>
            <div class="flex items-center space-x-2">
                <input type="radio" id="accept_terms_yes" name="accept_terms" value="yes"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="accept_terms_yes" class="text-sm">Yes</label>
                <input type="radio" id="accept_terms_no" name="accept_terms" value="no"
                    class="form-radio h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500 focus:outline-none">
                <label for="accept_terms_no" class="text-sm">No</label>
            </div>
            @if ($errors->has('accept_terms'))
                <span class="text-red-500 text-sm mt-2">{{ $errors->first('accept_terms') }}</span>
            @endif
        </div>

        {{-- submit button --}}
        <button type="submit"
            class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Register
        </button>

    </form>

    {{-- error message --}}
    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(e) {
            const termsAccepted = document.querySelector('input[name="accept_terms"]:checked').value;
            if (termsAccepted !== 'yes') {
                e.preventDefault();
                alert('You must accept the terms and conditions to register.');
            }
        });
    </script>
</div>
