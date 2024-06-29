@extends('main')
@section('content')

<div class="mb-6 h-48 flex flex-col items-center justify-center bg-gradient-to-r from-pink-500 to-purple-700">
  <h2 class="font-bold text-3xl uppercase text-center text-gray-100">
    Franchise Form
  </h2>
  <p class="text-gray-100 text-lg">Home / Franchise Form</p>
</div>

<!-- Tabs Navigation -->
<div class="w-full container mx-auto bg-pink-100 p-4 rounded-md">
  <form method="post" action="{{route('franchise.form.post')}}">
    @csrf
    <ul class="flex flex-col md:flex-row border-b">
      <li class="mr-1 mb-2 md:mb-0">
        <a href="#personal"
          class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-800 font-semibold border-b-2 border-purple-500"
          id="tab-personal">Franchise Applicant's Personal Particulars</a>
      </li>
      <li class="mr-1 mb-2 md:mb-0">
        <a href="#other"
          class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-800 font-semibold border-b-2 border-transparent"
          id="tab-other">Other Information</a>
      </li>
      <li class="mr-1 mb-2 md:mb-0">
        <a href="#nominee"
          class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-800 font-semibold border-b-2 border-transparent"
          id="tab-nominee">Nominee Information</a>
      </li>
      <li class="mr-1 mb-2 md:mb-0">
        <a href="#confidential"
          class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-800 font-semibold border-b-2 border-transparent"
          id="tab-confidential">Confidential</a>
      </li>
    </ul>

    <!-- Tabs Content -->
    <div class="w-full mx-auto mt-4">
      <!-- Personal -->
      <div id="personal" class="tab-content block">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="my-1">
            <div>
              <label>Recommended By (if any):</label>
              <input type="text" name="recommended_by" class="form-control border border-gray-300 p-2 rounded w-full">
            </div>
          </div>
          <div class="my-1">
            <div>
              <label>Contact No. I Mobile/ Email:</label>
              <input type="text" name="recommended_contact_info"
                class="form-control border border-gray-300 p-2 rounded w-full">
            </div>
          </div>
          <div class="col-span-1 md:col-span-2 my-1">
            <span class="text-sm">
              Note: Completing this form does not place any obligation on the applicant to purchase or the
              franchisor to sell the franchise to the applicant. To expedite processing of your
              application,
              please ensure that all information is provided as requested. Where information is not
              available
              or applicable, please indicate accordingly. All information will be kept confidential.
            </span>
          </div>
          <div class="col-span-1 md:col-span-2 my-3">
            <h3><strong>Franchise Applicant's Personal Particulars</strong></h3>
            <span class="text-sm"> (Probe Healthcare accepts franchise applications from individual persons
              only)</span>
          </div>
          <div class="my-1">
            <div>
              <label>Date of application:</label>
              <input type="date" name="date_of_application"
                class="form-control border border-gray-300 p-2 rounded w-full">
            </div>
          </div>
          <div class="my-1">
            <div>
              <label>Full Name: <br> <span class="text-sm">(In CAPITAL LETTER)</span></label>
              <input type="text" name="full_name" class="form-control border border-gray-300 p-2 rounded w-full">
            </div>
          </div>
          <div class="col-span-1 md:col-span-2 my-1">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
              <div class="md:col-span-1">
                <label>Home Address: </label>
              </div>
              <div class="md:col-span-4">
                <input type="text" name="home_address" class="form-control border border-gray-300 p-2 rounded w-full">
                <p class="text-sm text-right">(Please indicate local address only)</p>
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Mobile Tel Number:</label>
              </div>
              <div class="md:col-span-2">
                <input type="text" name="mobile_no" class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Home Tel Number:</label>
              </div>
              <div class="md:col-span-2">
                <input type="text" name="home_tel_no" class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Date of Birth: </label>
              </div>
              <div class="md:col-span-2">
                <input type="date" name="dob" class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>E-mail Address: </label>
              </div>
              <div class="md:col-span-2">
                <input type="email" name="email" class="form-control border border-gray-300 p-2 rounded w-full">
                <p class="text-right text-sm"> (Please write clearly)</p>
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Nationality/ PR Status: </label>
              </div>
              <div class="md:col-span-2">
                <input type="text" name="nationality" class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Sex: </label>
              </div>
              <div class="md:col-span-2">
                <select name="sex" class="form-control border border-gray-300 p-2 rounded w-full">
                  <option>Select Sex</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Marital Status: </label>
              </div>
              <div class="md:col-span-2">
                <select name="marital_status" class="form-control border border-gray-300 p-2 rounded w-full">
                  <option>Select Marital Status:</option>
                  <option value="Married">Married</option>
                  <option value="Unmarried">Unmarried</option>
                  <option value="Divorce">Divorce</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-span-1 md:col-span-2 my-3">
            <h3><strong>Educational Qualifications</strong></h3>
          </div>
          <div class="col-span-1 md:col-span-2">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>Highest Educational Level: </label>
              </div>
              <div>
                <input type="text" name="education_level"
                  class="form-control border border-gray-300 p-2 rounded w-full">
                <p class="text-right text-sm">(Please include year qualification was achieved)</p>
              </div>
            </div>
          </div>
          <div class="col-span-1 md:col-span-2">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>Did you receive a degree from a University/ College? <small>(Please delete where
                    not applicable)</small> </label>
              </div>
              <div>
                <input type="text" name="university" class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="col-span-1 md:col-span-2">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>Details of qualifications: </label>
              </div>
              <div>
                <input type="text" name="qualification" class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="col-span-1 md:col-span-2 my-3">
            <h3><strong>Employment / Business History</strong></h3>
            <small>(Please provide details of your employment status or business that you own)</small>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
              <div class="md:col-span-1">
                <label><strong>1. Current</strong> Employer/ Business Owned:</label>
              </div>
              <div class="md:col-span-3">
                <input type="text" name="name_of_company"
                  class="form-control border border-gray-300 p-2 rounded w-full">
                <p class="text-right text-sm">(Name of company)</p>
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-center">
              <div class="md:col-span-1">
                <label>Business Address:</label>
              </div>
              <div class="md:col-span-4">
                <input type="text" name="business_address"
                  class="form-control border border-gray-300 p-2 rounded w-full">
                <p class="text-right text-sm">(Please indicate local address only)</p>
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
              <div class="md:col-span-1">
                <label>Tel Number:</label>
              </div>
              <div class="md:col-span-3">
                <input type="text" name="business_tel_no"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Nature of business:</label>
              </div>
              <div class="md:col-span-2">
                <input type="text" name="business_nature"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Your Designation:</label>
              </div>
              <div class="md:col-span-2">
                <input type="text" name="business_designation"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>From:</label>
              </div>
              <div>
                <input type="date" name="employment_from"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>To:</label>
              </div>
              <div>
                <input type="date" name="employment_to" class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>Key responsibilities:</label>
              </div>
              <div>
                <input type="text" name="business_responsibility"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>Reason for leaving:</label>
              </div>
              <div>
                <input type="text" name="business_reason_for_leaving"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
              <div class="md:col-span-1">
                <label><strong>2. Previous</strong> Employer/ Business Owned:</label>
              </div>
              <div class="md:col-span-3">
                <input type="text" name="name_of_previous_company"
                  class="form-control border border-gray-300 p-2 rounded w-full">
                <p class="text-right text-sm">(Name of company)</p>
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-center">
              <div class="md:col-span-1">
                <label>Business Address:</label>
              </div>
              <div class="md:col-span-4">
                <input type="text" name="previous_business_address"
                  class="form-control border border-gray-300 p-2 rounded w-full">
                <p class="text-right text-sm">(Please indicate local address only)</p>
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
              <div class="md:col-span-1">
                <label>Tel Number:</label>
              </div>
              <div class="md:col-span-3">
                <input type="text" name="previous_business_tel_no"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Nature of business:</label>
              </div>
              <div class="md:col-span-2">
                <input type="text" name="previous_business_nature"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
              <div>
                <label>Your Designation:</label>
              </div>
              <div class="md:col-span-2">
                <input type="text" name="previous_business_designation"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>From:</label>
              </div>
              <div>
                <input type="date" name="previous_employment_from"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>To:</label>
              </div>
              <div>
                <input type="date" name="previous_employment_to"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>Key responsibilities:</label>
              </div>
              <div>
                <input type="text" name="previous_business_responsibility"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
          <div class="my-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
              <div>
                <label>Reason for leaving:</label>
              </div>
              <div>
                <input type="text" name="previous_business_reason_for_leaving"
                  class="form-control border border-gray-300 p-2 rounded w-full">
              </div>
            </div>
          </div>
        </div>

        <div class="my-4 flex justify-center">
          <button type="button" id="next-other"
            class="h-8 text-white rounded bg-gradient-to-r from-pink-500 to-purple-700 ">
            <span
              class=" px-2  inline-flex justify-center items-center mx-2 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">
              Next
            </span>
          </button>
        </div>
      </div>

      <!-- Other -->
      <div id="other" class="tab-content hidden">
        <div class="w-full my-1">
          <h3 class="font-bold text-lg">Other Information</h3>
        </div>
        <div class="w-full my-1">
          <div class="flex flex-col md:flex-row md:items-center">
            <label class="w-full md:w-3/4">1. Have you or your spouse ever applied for any franchise
              before?</label>
            <div class="flex justify-start md:justify-end space-x-4 w-full md:w-1/4 mt-2 md:mt-0">
              <label for="have_you_applied_before1" class="flex items-center">
                <input type="radio" name="have_you_applied_before" value="Yes" id="have_you_applied_before1"
                  class="mr-1"> Yes
              </label>
              <label for="have_you_applied_before2" class="flex items-center">
                <input type="radio" name="have_you_applied_before" value="No" id="have_you_applied_before2"
                  class="mr-1"> No
              </label>
            </div>
          </div>
        </div>
        <div class="w-full my-1">
          <div class="flex flex-col md:flex-row md:items-center">
            <div class="w-full md:w-1/12">&nbsp;</div>
            <div class="w-full md:w-11/12 mt-2 md:mt-0">
              <div class="flex flex-col md:flex-row md:items-center">
                <small class="w-full md:w-1/4 mb-2 md:mb-0">if yes, please state details & year:</small>
                <input type="text" name="details_and_year" class="form-input w-full md:w-3/4">
              </div>
            </div>
          </div>
        </div>
        <div class="w-full my-1">
          <div class="flex flex-col md:flex-row md:items-center">
            <label class="w-full md:w-5/12">2. Why are you applying for the franchise?</label>
            <input type="text" name="why_applying_franchise" class="form-input w-full md:w-7/12 mt-2 md:mt-0">
          </div>
        </div>
        <div class="w-full my-1">
          <div class="flex flex-col md:flex-row md:items-center">
            <label class="w-full md:w-5/12">3. Why do you think you'll make an ideal PROBE HEALTHCARE
              franchisee?</label>
            <input type="text" name="why_do_you_think_make_deal_probe" class="form-input w-full md:w-7/12 mt-2 md:mt-0">
          </div>
        </div>
        <div class="my-4 flex justify-center">

          <button type="button" id="next-nominee"
            class="h-8 text-white rounded bg-gradient-to-r from-pink-500 to-purple-700 ">
            <span
              class=" px-2  inline-flex justify-center items-center mx-2 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">
              Next
            </span>
          </button>
        </div>

      </div>

      <!-- Nominee -->
      <div id="nominee" class="tab-content hidden">
        <div class="mt-5 space-y-4">
          <div class="my-1">
            <h3 class="font-bold text-lg">Nominee Information</h3>
          </div>
          <div class="my-1">
            <div class="flex flex-col md:flex-row md:items-center">
              <label class="w-full md:w-1/4">Full Name:</label>
              <input type="text" name="nominee_full_name" class="form-input w-full md:w-3/4">
            </div>
          </div>
          <div class="my-1">
            <div class="flex flex-col md:flex-row md:items-center">
              <label class="w-full md:w-1/4">Mobile Number:</label>
              <input type="text" name="nominee_mobile_no" class="form-input w-full md:w-3/4">
            </div>
          </div>
          <div class="my-1">
            <div class="flex flex-col md:flex-row md:items-center">
              <label class="w-full md:w-1/4">NID Card Number:</label>
              <input type="text" name="nominee_nid_no" class="form-input w-full md:w-3/4">
            </div>
          </div>
          <div class="my-1">
            <div class="flex flex-col md:flex-row md:items-center">
              <label class="w-full md:w-1/4">Date of Birth:</label>
              <input type="text" name="nominee_dob" class="form-input w-full md:w-3/4">
            </div>
          </div>
          <div class="my-1">
            <div class="flex flex-col md:flex-row md:items-center">
              <label class="w-full md:w-1/4">Relation with the franchise:</label>
              <input type="text" name="nominee_relation_with_franchise" class="form-input w-full md:w-3/4">
            </div>
          </div>
        </div>
        <div class="my-4 flex justify-center">

          <button type="button" id="next-confidential"
            class="h-8 text-white rounded bg-gradient-to-r from-pink-500 to-purple-700 ">
            <span
              class=" px-2  inline-flex justify-center items-center mx-2 font-semibold flex items-center border-b-2 border-transparent hover-underline-animation">
              Next
            </span>
          </button>

        </div>
      </div>

      <!-- Confidential -->
      <div id="confidential" class="tab-content hidden">
        <div class="mt-5 space-y-4">
          <div class="my-1">
            <h3 class="font-bold text-lg">Confidential</h3>
          </div>
          <div class="my-1">
            <div class="flex flex-col md:flex-row md:items-center">
              <label class="w-full md:w-5/6">How many family members, relatives, or friends, do you
                already have in mind who can help you to succeed in this business?</label>
              <input type="text" name="family_member_count" class="form-input w-full md:w-1/6 mt-2 md:mt-0">
            </div>
          </div>
          <div class="my-1 overflow-x-auto">
            <table class="w-full text-sm border border-gray-300">
              <thead>
                <tr class="bg-gray-100">
                  <th class="border border-gray-300 px-2 py-1">Name</th>
                  <th class="border border-gray-300 px-2 py-1">Relation To You</th>
                  <th class="border border-gray-300 px-2 py-1">Current Job</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="border border-gray-300 px-2 py-1">1.</td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="name_1"></td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="current_job_1"></td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-2 py-1">2.</td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="name_2"></td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="current_job_2"></td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-2 py-1">3.</td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="name_3"></td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="current_job_3"></td>
                </tr>
                <tr>
                  <td class="border border-gray-300 px-2 py-1">4.</td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="name_4"></td>
                  <td class="border border-gray-300 px-2 py-1"><input type="text" class="form-input w-full"
                      name="current_job_4"></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="flex justify-center">
          <input type="submit" class="mt-4 p-2 w-[200px] bg-gradient-to-r from-pink-500 to-purple-700  text-gray-100 font-semibold rounded" value="Submit">

        </div>
      </div>
    </div>
  </form>
</div>



<script>
  document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
    document.querySelector('#personal').classList.remove('hidden');

    document.querySelectorAll('.border-b a').forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
            document.querySelector(this.getAttribute('href')).classList.remove('hidden');
            document.querySelectorAll('.border-b a').forEach(tab => tab.classList.replace('border-purple-500', 'border-transparent'));
            this.classList.replace('border-transparent', 'border-purple-500');
        });
    });

    document.getElementById('next-other').addEventListener('click', function () {
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
        document.querySelector('#other').classList.remove('hidden');
        document.querySelectorAll('.border-b a').forEach(tab => tab.classList.replace('border-purple-500', 'border-transparent'));
        document.querySelector('#tab-other').classList.replace('border-transparent', 'border-purple-500');
    });

    document.getElementById('next-nominee').addEventListener('click', function () {
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
        document.querySelector('#nominee').classList.remove('hidden');
        document.querySelectorAll('.border-b a').forEach(tab => tab.classList.replace('border-purple-500', 'border-transparent'));
        document.querySelector('#tab-nominee').classList.replace('border-transparent', 'border-purple-500');
    });

    document.getElementById('next-confidential').addEventListener('click', function () {
        document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
        document.querySelector('#confidential').classList.remove('hidden');
        document.querySelectorAll('.border-b a').forEach(tab => tab.classList.replace('border-purple-500', 'border-transparent'));
        document.querySelector('#tab-confidential').classList.replace('border-transparent', 'border-purple-500');
    });
</script>



@endsection
