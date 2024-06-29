@extends('main')
@section('content')


  <!-- Tabs Navigation -->
  <div class="w-full mx-auto">

    <form method="post" action="{{route('franchise.form.post')}}">
        @csrf

    <ul class="flex border-b">
      <li class="mr-1">
        <a href="#personal" class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold border-b-2 border-blue-500" id="tab-personal">Franchise Applicant's Personal Particulars</a>
      </li>
      <li class="mr-1">
        <a href="#other" class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-800 font-semibold border-b-2 border-transparent" id="tab-other">Other Information</a>
      </li>
      <li class="mr-1">
        <a href="#nominee" class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-800 font-semibold border-b-2 border-transparent" id="tab-nominee">Nominee Information</a>
      </li>
      <li class="mr-1">
        <a href="#confidential" class="bg-white inline-block py-2 px-4 text-gray-500 hover:text-blue-800 font-semibold border-b-2 border-transparent" id="tab-confidential">Confidential</a>
      </li>
    </ul>
  </div>

  <!-- Tabs Content -->
  <div class="w-full mx-auto mt-4">
    <form method="post" action="{{route('franchise.form.post')}}">
        @csrf
    <!-- Personal -->
    <div id="personal" class="tab-content block">
        <div class="row">
            <div class="col-12 col-md-6 my-2">
                <div class="grid auto-fill">
                    <label>Recommended By (if any):</label>
                    <input type="text" name="recommended_by" class="form-control">
                </div>
            </div>
            <div class="col-12 col-md-6 my-2">
                <div class="grid auto-fill">
                    <label>Contact No. I Mobile/ Email:</label>
                    <input type="text" name="recommended_contact_info" class="form-control">
                </div>
            </div>
             <div class="col-12 my-2">
                 <span class="small">
                     Note: Completing this form does not place any obligation on the applicant to purchase or the franchisor to sell the franchise to theapplicant. To expedite processing of your application,
                     please ensure that alltileinformationis providedasrequested. Whereinformationisnotavailable orapplicable, pleaseindicate accordingly.All information willbe kept confidential.
                 </span>
             </div>
             <div class="col-12 my-3">
                 <h3><strong>Franchise Applicant's Personal Particulars</strong></h3>
                <span class="small"> (Probe Healthcare accepts franchise applications from individual persons only)</span>
             </div>

              <div class="col-12 col-md-6 my-2">
                <div class="grid auto-fill">
                    <label class="">Date of application:</label>
                    <input type="date" name="date_of_application"  class="form-control">
                </div>
            </div>


              <div class="col-12 col-md-6 my-2">

                <div class="grid auto-fit">
                    <label>Full Name: <br> <span class="small">(In CAPITAL LETTER)</span></label>
                    <input type="text" name="full_name"  class="form-control">
                </div>
            </div>

              <div class="col-12 col-md-12 my-2">
                  <div class="row ">
                      <div class="col-12 col-md-2"><label>Home Address: </label></div>
                      <div class="col-12 col-md-10">
                          <input type="text" name="home_address"  class="form-control">
                          <p class="small text-right">(Please indicate local address only)</p>
                      </div>
                  </div>

            </div>

             <div class="col-12 col-md-6 my-2">

                 <div class="row align-items-center">
                      <div class="col-12 col-md-4"><label>Mobile Tel Number:</label></div>
                      <div class="col-12 col-md-8">
                         <input type="text" name="mobile_no"  class="form-control">
                      </div>
                  </div>

            </div>

             <div class="col-12 col-md-6 my-2">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-4"><label>Home Tel Number:</label></div>
                      <div class="col-12 col-md-8">
                          <input type="text" name="home_tel_no" class="form-control">
                      </div>
                  </div>

            </div>


             <div class="col-12 col-md-6 my-2">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-4"><label>Date of Birth: </label></div>
                      <div class="col-12 col-md-8">
                          <input type="date" name="dob"  class="form-control">
                      </div>
                  </div>

            </div>


             <div class="col-12 col-md-6 my-2">
                 <div class="row align-items-">
                      <div class="col-12 col-md-4"><label>E-mail Address: </label></div>
                      <div class="col-12 col-md-8">
                          <input type="email" name="email"  class="form-control">
                          <p class="text-right small"> (Please write clearly)</p>
                      </div>
                  </div>

            </div>

             <div class="col-12 col-md-4 my-2">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-4"><label>Nationality/ PR Status: </label></div>
                      <div class="col-12 col-md-8">
                          <input type="text" name="nationality"  class="form-control">
                      </div>
                  </div>

            </div>


             <div class="col-12 col-md-4 my-2">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-4"><label>Sex: </label></div>
                      <div class="col-12 col-md-8">
                          <select name="sex" class="form-control" >
                              <option>Select Sex</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                          </select>
                      </div>
                  </div>

            </div>
             <div class="col-12 col-md-4 my-2">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-4"><label>Marital Status: </label></div>
                      <div class="col-12 col-md-8">
                          <select name="marital_status" class="form-control" >
                              <option>Select Marital Status:</option>
                              <option value="Married">Married</option>
                              <option value="Unmarried">Unmarried</option>
                              <option value="Divorce">Divorce</option>
                          </select>
                      </div>
                  </div>

            </div>
             <div class="col-12  my-3">
                <h3> <strong>Educational Qualifications</strong></h3>
            </div>

             <div class="col-12">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-6"><label>Highest Educational Level: </label></div>
                      <div class="col-12 col-md-6">
                         <input type="text" name="education_level" class="form-control">
                         <p class="text-right">(Please include year qualification was achieved)</p>
                      </div>
                  </div>
            </div>
             <div class="col-12">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-6"><label>Did you receive a degree from a University/ College? <small>(Please deletewhere not applicable)</small> </label></div>
                      <div class="col-12 col-md-6">
                         <input type="text" name="university" class="form-control">
                      </div>
                  </div>
            </div>

             <div class="col-12">
                 <div class="row align-items-center">
                      <div class="col-12 col-md-6"><label>Details of qualifications: </div>
                      <div class="col-12 col-md-6">
                         <input type="text" name="qualification" class="form-control">
                      </div>
                  </div>
            </div>



              <div class="col-12  my-3">
                  <h3> <strong>Employment / Business History</strong></h3>
                  <small>(Please provide details of your employment status or business that you own)</small>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-">
                      <div class="col-12 col-md-4"><label><strong>1. Current</strong> Employer/ Business Owned:</label></div>
                      <div class="col-12 col-md-8">
                          <input type="text" name="name_of_company" class="form-control">
                          <p class="text-right">(Name of company)</p>
                      </div>
                  </div>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-2"><label>Business Address:</label></div>
                      <div class="col-12 col-md-10">
                          <input type="text" name="business_address" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Position:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text" name="position" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Monthly Income:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="number" step="any" name="monthly_income" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Date Joined:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="date"  name="date_joined" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Date Left:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="date"  name="date_left" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Describe Duties:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text"  name="describe_duties" class="form-control">
                          <p class="text-right">(For business owned, please describe business structure and duties)</p>
                      </div>
                  </div>
              </div>



              <div class="col-12 my-2">
                  <div class="row align-items-">
                      <div class="col-12 col-md-4"><label><strong>2. Previous</strong> Employer/ Business Owned:</label></div>
                      <div class="col-12 col-md-8">
                          <input type="text" name="prev_name_of_company" class="form-control">
                          <p class="text-right">(Name of company)</p>
                      </div>
                  </div>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-2"><label>Business Address:</label></div>
                      <div class="col-12 col-md-10">
                          <input type="text" name="prev_business_address" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Last Position Held:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text" name="prev_position" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Monthly Income:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="number" step="any" name="prev_monthly_income" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Date Joined:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="date" step="any" name="prev_date_joined" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Date Left:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="date"  name="prev_date_left" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Reason for Leaving:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text" name="prev_reason_for_leaving" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-">
                      <div class="col-12 col-md-3"><label>Describe Duties:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text"  name="prev_describe_duties" class="form-control">
                          <p class="text-right">(For business owned, please describe business structure and duties)</p>
                      </div>
                  </div>
              </div>



              <div class="col-12 my-2">
                  <div class="row align-items-">
                      <div class="col-12 col-md-4"><label><strong>3. Previous</strong> Employer/ Business Owned:</label></div>
                      <div class="col-12 col-md-8">
                          <input type="text" name="prev_prev_name_of_company" class="form-control">
                          <p class="text-right">(Name of company)</p>
                      </div>
                  </div>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-2"><label>Business Address:</label></div>
                      <div class="col-12 col-md-10">
                          <input type="text" name="prev_prev_business_address" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Last Position Held:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text" name="prev_prev_position" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Monthly Income:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="number" step="any" name="prev_prev_monthly_income" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Date Joined:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="date"  name="prev_prev_date_joined" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 col-md-6 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Date Left:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="date" name="prev_prev_date_left" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12  my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Reason for Leaving:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text"  name="prev_prev_reason_for_leaving" class="form-control">
                      </div>
                  </div>
              </div>
              <div class="col-12 my-2">
                  <div class="row align-items-center">
                      <div class="col-12 col-md-3"><label>Describe Duties:</label></div>
                      <div class="col-12 col-md-9">
                          <input type="text"  name="prev_prev_describe_duties" class="form-control">
                          <p class="text-right">(For business owned, please describe business structure and duties)</p>
                      </div>
                  </div>
              </div>


        </div>

         <label><strong>Note: </strong> You may wish to attach a separate sheet if any space in the form is insufficient and/or attach your resume.</label>
        <h3 class="my-3"> <strong>Declaration</strong></h3>

         <p>
          I do hereby represent that all of the above answers are true and complete to the best of my knowledge and belief. I recognize
          that PROBE HEALTHCARE is not in any way obligated to franchise healthcare services to me because of our execution of this
          document. I acknowledge that any false statement on this application shall be considered sufficient cause to deny any further
          consideration or cause revocation of any signed agreement with PROBE HEALTHCARE. I understand that an inquiry regarding
          my character, general reputation, personal characteristics, financial background and general fitness for being a PROBE
          HEATLCARE franchisee may be made as a result of this application.
      </p>
      <p>
          In addition, by signing below I release any and all former and I or present employers, and any other personal or business
          references, from any liability whatsoever in connection with PROBE HEALTHCARE attempts to investigate my background and
          determine my fitness to become a franchisee. I hereby authorize the release of any and all documents, records, and other
          information pertaining to me to PROBE HEALTHCARE. A copy of this authorization may be used in place of and shall be valid
          as the original.

      </p>
      <p>I  understand that this application is considered active for 60 days from the date below. I understand that PROBE HEALTHCARE
          reserve the right to reject my application without assigning any reasons whatsoever.
      </p>
      <p>
          I  confirm that I will immediately notify PROBE HEALTHCARE in writing of any changes to my personal data or any other
          information contained in this form. By completing this form, I consent to your collection, use and disclosure of my personal data
          for the purposes of evaluating the franchise application, and if my franchise application is approved, then for the further purposes
          of:
      </p>
      <p>
          managing or terminating the franchise relationship; and conducting any other business or legal matters related (directly or indirectly) to the franchise relationship and/or operation
              of the PROBE HEALTHCARE.

      </p>
      <button class="nav-link btn btn-success" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Next</button>
    </div>

    <!-- Other -->
    <div id="other" class="tab-content hidden">
        <div class="col-12 my-2"><h3> <strong>Other Information</strong></h3> </div>
        <div class="col-12 my-2">
            <div class="row align-items-center">
                <div class="col-12 col-md-9"><label>1. Have you or your spouse ever applied for any franchise before?</label></div>
                <div class="col-12 col-md-3">
                    <label for="have_you_applied_before1"> <input type="radio" name="have_you_applied_before" value="Yes" id="have_you_applied_before1">Yes</label>
                    <label for="have_you_applied_before2"> <input type="radio" name="have_you_applied_before" value="No" id="have_you_applied_before2">No</label>
                </div>
            </div>
        </div>



        <div class="col-12 my-2">
            <div class="row align-items-center">
                <div class="col-12 col-md-1">&nbsp;</label></div>
                <div class="col-12 col-md-11">
                    <div class="row">
                        <div class="col-12 col-md-3"><small>if yes,please state details & year:</small></div>
                        <div class="col-12 col-md-9"><input type="text"  name="details_and_year" class="form-control"></div>
                </div>
            </div>
        </div>

        <div class="col-12 my-2">
            <div class="row align-items-center">
                <div class="col-12 col-md-5"><label>2. Why are you applying for the franchise?</label></div>
                <div class="col-12 col-md-7">
                   <input type="text"  name="why_applying_franchise" class="form-control">
                </div>
            </div>
        </div>

        <div class="col-12 my-2">
            <div class="row align-items-center">
                <div class="col-12 col-md-5"><label>3. Why do youthink you'll make an ideal PROBE HEALTHCARE franchisee?</label></div>
                <div class="col-12 col-md-7">
                   <input type="text"  name="why_do_you_think_make_deal_probe" class="form-control">
                </div>
            </div>
        </div>
     </div>

</div>
 <button class="nav-link btn btn-success" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Next</button>
    </div>

    <!-- Nominee -->
    <div id="nominee" class="tab-content hidden">
        <div class="row mt-5">
            <div class="col-12 my-2"><h3> <strong>Nominee Information</strong></h3> </div>
           <div class="col-12 my-2">
               <div class="row align-items-center">
                   <div class="col-12 col-md-3"><label> Full Name: </label></div>
                   <div class="col-12 col-md-9">
                      <input type="text"  name="nominee_full_name" class="form-control">
                   </div>
               </div>
           </div>
           <div class="col-12 my-2">
               <div class="row align-items-center">
                   <div class="col-12 col-md-3"><label>Mobile Number: </label></div>
                   <div class="col-12 col-md-9">
                      <input type="text"  name="nominee_mobile_no" class="form-control">
                   </div>
               </div>
           </div>
           <div class="col-12 col-md-6 my-2">
               <div class="row align-items-center">
                   <div class="col-12 col-md-3"><label>NID Card Number: </label></div>
                   <div class="col-12 col-md-9">
                      <input type="text"  name="nominee_nid_no" class="form-control">
                   </div>
               </div>
           </div>
           <div class="col-12 col-md-6 my-2">
               <div class="row align-items-center">
                   <div class="col-12 col-md-3"><label>Date of Birth: </label></div>
                   <div class="col-12 col-md-9">
                      <input type="text"  name="nominee_dob" class="form-control">
                   </div>
               </div>
           </div>
           <div class="col-12 my-2">
               <div class="row align-items-center">
                   <div class="col-12 col-md-3"><label>Relation with the franchise: </label></div>
                   <div class="col-12 col-md-9">
                      <input type="text"  name="nominee_relation_with_franchise" class="form-control">
                   </div>
               </div>
           </div>


 </div>
  <button class="nav-link btn btn-success" id="confidential-tab" data-toggle="tab" data-target="#confidential" type="button" role="tab" aria-controls="confidential" aria-selected="false">Next</button>
    </div>

    <!-- Confidential -->
    <div id="confidential" class="tab-content hidden">
        <div class="row mt-5">
            <div class="col-12 my-2"><h3> <strong>Confidential</strong></h3> </div>
           <div class="col-12 my-2">
               <div class="row align-items-center">
                   <div class="col-12 col-md-10"><label>How many family members, relatives or friends, you already have in mind who can help you to succeed in this business?</label></div>
                   <div class="col-12 col-md-2">
                      <input type="text"  name="family_member_count" class="form-control">
                   </div>
               </div>
           </div>
           <div class="col-12 my-2">
               <div class="table-responsive">
                   <table class="table table-borderd text-sm">
                       <tr>
                           <th colspan="1">Name</th>
                           <th>Relation To You</th>
                           <th>current Job</th>
                       </tr>
                       <tr>
                           <td>1.</td>
                           <td><input type="text" class="form-control" name="name_1"></td>
                           <td><input type="text" class="form-control" name="current_job_1"></td>
                       </tr>
                       <tr>
                           <td>2.</td>
                           <td><input type="text" class="form-control" name="name_2"></td>
                           <td><input type="text" class="form-control" name="current_job_2"></td>
                       </tr>
                       <tr>
                           <td>3.</td>
                           <td><input type="text" class="form-control" name="name_3"></td>
                           <td><input type="text" class="form-control" name="current_job_3"></td>
                       </tr>
                       <tr>
                           <td>4.</td>
                           <td><input type="text" class="form-control" name="name_4"></td>
                           <td><input type="text" class="form-control" name="current_job_4"></td>
                       </tr>
                   </table>
               </div>
           </div>



 </div>
  <input type="submit" class="btn btn-success">
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
        document.querySelectorAll('.border-b a').forEach(tab => tab.classList.replace('border-blue-500', 'border-transparent'));
        this.classList.replace('border-transparent', 'border-blue-500');
      });
    });
  </script>

<section >
    <div class="">
        <form method="post" action="{{route('franchise.form.post')}}">
            @csrf
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Franchise Applicant's Personal Particulars</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Other Informatio</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Nominee Information</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="confidential-tab" data-toggle="tab" data-target="#confidential" type="button" role="tab" aria-controls="confidential" aria-selected="false">Confidential</button>
          </li>
        </ul>


        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active mt-4" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                  <div class="col-12 col-md-6 my-2">
                      <div class="grid auto-fill">
                          <label>Recommended By (if any):</label>
                          <input type="text" name="recommended_by" class="form-control">
                      </div>
                  </div>
                  <div class="col-12 col-md-6 my-2">
                      <div class="grid auto-fill">
                          <label>Contact No. I Mobile/ Email:</label>
                          <input type="text" name="recommended_contact_info" class="form-control">
                      </div>
                  </div>
                   <div class="col-12 my-2">
                       <span class="small">
                           Note: Completing this form does not place any obligation on the applicant to purchase or the franchisor to sell the franchise to theapplicant. To expedite processing of your application,
                           please ensure that alltileinformationis providedasrequested. Whereinformationisnotavailable orapplicable, pleaseindicate accordingly.All information willbe kept confidential.
                       </span>
                   </div>
                   <div class="col-12 my-3">
                       <h3><strong>Franchise Applicant's Personal Particulars</strong></h3>
                      <span class="small"> (Probe Healthcare accepts franchise applications from individual persons only)</span>
                   </div>

                    <div class="col-12 col-md-6 my-2">
                      <div class="grid auto-fill">
                          <label class="">Date of application:</label>
                          <input type="date" name="date_of_application"  class="form-control">
                      </div>
                  </div>


                    <div class="col-12 col-md-6 my-2">

                      <div class="grid auto-fit">
                          <label>Full Name: <br> <span class="small">(In CAPITAL LETTER)</span></label>
                          <input type="text" name="full_name"  class="form-control">
                      </div>
                  </div>

                    <div class="col-12 col-md-12 my-2">
                        <div class="row ">
                            <div class="col-12 col-md-2"><label>Home Address: </label></div>
                            <div class="col-12 col-md-10">
                                <input type="text" name="home_address"  class="form-control">
                                <p class="small text-right">(Please indicate local address only)</p>
                            </div>
                        </div>

                  </div>

                   <div class="col-12 col-md-6 my-2">

                       <div class="row align-items-center">
                            <div class="col-12 col-md-4"><label>Mobile Tel Number:</label></div>
                            <div class="col-12 col-md-8">
                               <input type="text" name="mobile_no"  class="form-control">
                            </div>
                        </div>

                  </div>

                   <div class="col-12 col-md-6 my-2">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-4"><label>Home Tel Number:</label></div>
                            <div class="col-12 col-md-8">
                                <input type="text" name="home_tel_no" class="form-control">
                            </div>
                        </div>

                  </div>


                   <div class="col-12 col-md-6 my-2">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-4"><label>Date of Birth: </label></div>
                            <div class="col-12 col-md-8">
                                <input type="date" name="dob"  class="form-control">
                            </div>
                        </div>

                  </div>


                   <div class="col-12 col-md-6 my-2">
                       <div class="row align-items-">
                            <div class="col-12 col-md-4"><label>E-mail Address: </label></div>
                            <div class="col-12 col-md-8">
                                <input type="email" name="email"  class="form-control">
                                <p class="text-right small"> (Please write clearly)</p>
                            </div>
                        </div>

                  </div>

                   <div class="col-12 col-md-4 my-2">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-4"><label>Nationality/ PR Status: </label></div>
                            <div class="col-12 col-md-8">
                                <input type="text" name="nationality"  class="form-control">
                            </div>
                        </div>

                  </div>


                   <div class="col-12 col-md-4 my-2">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-4"><label>Sex: </label></div>
                            <div class="col-12 col-md-8">
                                <select name="sex" class="form-control" >
                                    <option>Select Sex</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>

                  </div>
                   <div class="col-12 col-md-4 my-2">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-4"><label>Marital Status: </label></div>
                            <div class="col-12 col-md-8">
                                <select name="marital_status" class="form-control" >
                                    <option>Select Marital Status:</option>
                                    <option value="Married">Married</option>
                                    <option value="Unmarried">Unmarried</option>
                                    <option value="Divorce">Divorce</option>
                                </select>
                            </div>
                        </div>

                  </div>
                   <div class="col-12  my-3">
                      <h3> <strong>Educational Qualifications</strong></h3>
                  </div>

                   <div class="col-12">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-6"><label>Highest Educational Level: </label></div>
                            <div class="col-12 col-md-6">
                               <input type="text" name="education_level" class="form-control">
                               <p class="text-right">(Please include year qualification was achieved)</p>
                            </div>
                        </div>
                  </div>
                   <div class="col-12">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-6"><label>Did you receive a degree from a University/ College? <small>(Please deletewhere not applicable)</small> </label></div>
                            <div class="col-12 col-md-6">
                               <input type="text" name="university" class="form-control">
                            </div>
                        </div>
                  </div>

                   <div class="col-12">
                       <div class="row align-items-center">
                            <div class="col-12 col-md-6"><label>Details of qualifications: </div>
                            <div class="col-12 col-md-6">
                               <input type="text" name="qualification" class="form-control">
                            </div>
                        </div>
                  </div>



                    <div class="col-12  my-3">
                        <h3> <strong>Employment / Business History</strong></h3>
                        <small>(Please provide details of your employment status or business that you own)</small>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-">
                            <div class="col-12 col-md-4"><label><strong>1. Current</strong> Employer/ Business Owned:</label></div>
                            <div class="col-12 col-md-8">
                                <input type="text" name="name_of_company" class="form-control">
                                <p class="text-right">(Name of company)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-2"><label>Business Address:</label></div>
                            <div class="col-12 col-md-10">
                                <input type="text" name="business_address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Position:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="position" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Monthly Income:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="number" step="any" name="monthly_income" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Date Joined:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="date"  name="date_joined" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Date Left:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="date"  name="date_left" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Describe Duties:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="describe_duties" class="form-control">
                                <p class="text-right">(For business owned, please describe business structure and duties)</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 my-2">
                        <div class="row align-items-">
                            <div class="col-12 col-md-4"><label><strong>2. Previous</strong> Employer/ Business Owned:</label></div>
                            <div class="col-12 col-md-8">
                                <input type="text" name="prev_name_of_company" class="form-control">
                                <p class="text-right">(Name of company)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-2"><label>Business Address:</label></div>
                            <div class="col-12 col-md-10">
                                <input type="text" name="prev_business_address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Last Position Held:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="prev_position" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Monthly Income:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="number" step="any" name="prev_monthly_income" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Date Joined:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="date" step="any" name="prev_date_joined" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Date Left:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="date"  name="prev_date_left" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Reason for Leaving:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="prev_reason_for_leaving" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-">
                            <div class="col-12 col-md-3"><label>Describe Duties:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="prev_describe_duties" class="form-control">
                                <p class="text-right">(For business owned, please describe business structure and duties)</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 my-2">
                        <div class="row align-items-">
                            <div class="col-12 col-md-4"><label><strong>3. Previous</strong> Employer/ Business Owned:</label></div>
                            <div class="col-12 col-md-8">
                                <input type="text" name="prev_prev_name_of_company" class="form-control">
                                <p class="text-right">(Name of company)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-2"><label>Business Address:</label></div>
                            <div class="col-12 col-md-10">
                                <input type="text" name="prev_prev_business_address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Last Position Held:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="prev_prev_position" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Monthly Income:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="number" step="any" name="prev_prev_monthly_income" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Date Joined:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="date"  name="prev_prev_date_joined" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Date Left:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="date" name="prev_prev_date_left" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12  my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Reason for Leaving:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="prev_prev_reason_for_leaving" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Describe Duties:</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text"  name="prev_prev_describe_duties" class="form-control">
                                <p class="text-right">(For business owned, please describe business structure and duties)</p>
                            </div>
                        </div>
                    </div>


              </div>

               <label><strong>Note: </strong> You may wish to attach a separate sheet if any space in the form is insufficient and/or attach your resume.</label>
              <h3 class="my-3"> <strong>Declaration</strong></h3>

               <p>
                I do hereby represent that all of the above answers are true and complete to the best of my knowledge and belief. I recognize
                that PROBE HEALTHCARE is not in any way obligated to franchise healthcare services to me because of our execution of this
                document. I acknowledge that any false statement on this application shall be considered sufficient cause to deny any further
                consideration or cause revocation of any signed agreement with PROBE HEALTHCARE. I understand that an inquiry regarding
                my character, general reputation, personal characteristics, financial background and general fitness for being a PROBE
                HEATLCARE franchisee may be made as a result of this application.
            </p>
            <p>
                In addition, by signing below I release any and all former and I or present employers, and any other personal or business
                references, from any liability whatsoever in connection with PROBE HEALTHCARE attempts to investigate my background and
                determine my fitness to become a franchisee. I hereby authorize the release of any and all documents, records, and other
                information pertaining to me to PROBE HEALTHCARE. A copy of this authorization may be used in place of and shall be valid
                as the original.

            </p>
            <p>I  understand that this application is considered active for 60 days from the date below. I understand that PROBE HEALTHCARE
                reserve the right to reject my application without assigning any reasons whatsoever.
            </p>
            <p>
                I  confirm that I will immediately notify PROBE HEALTHCARE in writing of any changes to my personal data or any other
                information contained in this form. By completing this form, I consent to your collection, use and disclosure of my personal data
                for the purposes of evaluating the franchise application, and if my franchise application is approved, then for the further purposes
                of:
            </p>
            <p>
                managing or terminating the franchise relationship; and conducting any other business or legal matters related (directly or indirectly) to the franchise relationship and/or operation
                    of the PROBE HEALTHCARE.

            </p>
            <button class="nav-link btn btn-success" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Next</button>
            </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


                 <div class="row mt-5">
                     <div class="col-12 my-2"><h3> <strong>Other Information</strong></h3> </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-9"><label>1. Have you or your spouse ever applied for any franchise before?</label></div>
                            <div class="col-12 col-md-3">
                                <label for="have_you_applied_before1"> <input type="radio" name="have_you_applied_before" value="Yes" id="have_you_applied_before1">Yes</label>
                                <label for="have_you_applied_before2"> <input type="radio" name="have_you_applied_before" value="No" id="have_you_applied_before2">No</label>
                            </div>
                        </div>
                    </div>



                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-1">&nbsp;</label></div>
                            <div class="col-12 col-md-11">
                                <div class="row">
                                    <div class="col-12 col-md-3"><small>if yes,please state details & year:</small></div>
                                    <div class="col-12 col-md-9"><input type="text"  name="details_and_year" class="form-control"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-5"><label>2. Why are you applying for the franchise?</label></div>
                            <div class="col-12 col-md-7">
                               <input type="text"  name="why_applying_franchise" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-5"><label>3. Why do youthink you'll make an ideal PROBE HEALTHCARE franchisee?</label></div>
                            <div class="col-12 col-md-7">
                               <input type="text"  name="why_do_you_think_make_deal_probe" class="form-control">
                            </div>
                        </div>
                    </div>
                 </div>

            </div>
             <button class="nav-link btn btn-success" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Next</button>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">


                 <div class="row mt-5">
                     <div class="col-12 my-2"><h3> <strong>Nominee Information</strong></h3> </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label> Full Name: </label></div>
                            <div class="col-12 col-md-9">
                               <input type="text"  name="nominee_full_name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Mobile Number: </label></div>
                            <div class="col-12 col-md-9">
                               <input type="text"  name="nominee_mobile_no" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>NID Card Number: </label></div>
                            <div class="col-12 col-md-9">
                               <input type="text"  name="nominee_nid_no" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Date of Birth: </label></div>
                            <div class="col-12 col-md-9">
                               <input type="text"  name="nominee_dob" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3"><label>Relation with the franchise: </label></div>
                            <div class="col-12 col-md-9">
                               <input type="text"  name="nominee_relation_with_franchise" class="form-control">
                            </div>
                        </div>
                    </div>


          </div>
           <button class="nav-link btn btn-success" id="confidential-tab" data-toggle="tab" data-target="#confidential" type="button" role="tab" aria-controls="confidential" aria-selected="false">Next</button>
            </div>

            <div class="tab-pane fade" id="confidential" role="tabpanel" aria-labelledby="confidential-tab">
                 <div class="row mt-5">
                     <div class="col-12 my-2"><h3> <strong>Confidential</strong></h3> </div>
                    <div class="col-12 my-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-10"><label>How many family members, relatives or friends, you already have in mind who can help you to succeed in this business?</label></div>
                            <div class="col-12 col-md-2">
                               <input type="text"  name="family_member_count" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-2">
                        <div class="table-responsive">
                            <table class="table table-borderd text-sm">
                                <tr>
                                    <th colspan="1">Name</th>
                                    <th>Relation To You</th>
                                    <th>current Job</th>
                                </tr>
                                <tr>
                                    <td>1.</td>
                                    <td><input type="text" class="form-control" name="name_1"></td>
                                    <td><input type="text" class="form-control" name="current_job_1"></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td><input type="text" class="form-control" name="name_2"></td>
                                    <td><input type="text" class="form-control" name="current_job_2"></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td><input type="text" class="form-control" name="name_3"></td>
                                    <td><input type="text" class="form-control" name="current_job_3"></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td><input type="text" class="form-control" name="name_4"></td>
                                    <td><input type="text" class="form-control" name="current_job_4"></td>
                                </tr>
                            </table>
                        </div>
                    </div>



          </div>
           <input type="submit" class="btn btn-success">
            </div>




            </form>
        </div>
</section>

@endsection
