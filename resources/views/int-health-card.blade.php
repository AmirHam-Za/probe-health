@extends('main')
@section('content')

<style>
    @keyframes popup {
        0% {
            transform: scale(0.5);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

    .popup {
        animation: popup 0.5s ease-out;
    }

    @keyframes slide-up {
        0% {
            transform: translateY(100%);
            opacity: 0;
        }

        100% {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .slide-up {
        animation: slide-up 0.3s ease-out;
    }

    .slide-up-late {
        animation: slide-up 0.3s ease-out 0.5s;
    }

    .slide-up-text {
        animation: slide-up 0.8s ease-out;
    }

    @keyframes move-arrow {

        0%,
        100% {
            transform: translateX(0);
        }

        50% {
            transform: translateX(10px);
        }
    }

    .move-arrow {
        animation: move-arrow 1s infinite;
    }
</style>

<div class=" flex items-center justify-center">

    <div class="p-4 health_card_bg_image  text-white text-center">
        <div class="">
            <img src="{{ asset('public/images/logos/health_card.png') }}" alt="Health Card"
                class="mx-auto slide-up  h-60 mb-4">
        </div>

        <style>
            .health_card_bg_image {
                background-image: url('public/images/logos/health_card_bg_image.jpg');
                background-size: cover;
                background-position: center;
            }
        </style>

        <div class="mx-24 slide-up bg-gradient-to-r from-pink-600 to-purple-800   p-4 rounded-lg border-2">
            <p class="slide-up-text mb-4 tiro-bangla-regular">
                রোগাক্রান্তের পরে সংক্রামক বা অসংক্রামক যেকোনো রোগ হলেই তার কিছু লক্ষণ দেখা দেয়। কিন্তু নিয়মিত হেলথ
                চেক-আপ করালে অধিকাংশ রোগের প্রাথমিক পর্যায়ে লক্ষণ প্রকাশের পূর্বেই শনাক্ত হয়। প্রাথমিক অবস্থায় উপসর্গ
                থাকে না বিধায় উচ্চ রক্তচাপ, হৃদ্‌রোগ, কিডনি রোগকে নীরব ঘাতক বলা হয় । হেলথ চেক-আপের পাশাপাশি সচেতন ও
                সতর্ক হলে যেমন অনেক রোগ প্রতিরোধ করা যায়, তেমনি অনেক রোগ থেকে প্রাথমিক পর্যায়ে স্বল্প খরচে মুক্তি
                পাওয়া যায়। রোগ প্রতিরোধে এবং রোগের প্রাথমিক পর্যায়ে চিকিৎসা শুরু করার প্রয়োজনে বছরে ২ বার হেলথ
                চেক-আপ করা প্রয়োজন। স্বল্প খরচে প্রিভেন্টিভ হেলথ চেক-আপ সহ বিভিন্ন সুযোগ-সুবিধা নিয়ে এসেছে প্রোব
                ইন্টারন্যাশনাল হেলথ কার্ড।

            </p>

        </div>

        <button
            class=" my-4 h-8 bg-gradient-to-r from-pink-600 to-[#5D14E4] text-white px-4 rounded-full inline-flex items-center">
            <span class="tiro-bangla-regular">ইন্টারন্যাশনাল হেলথ কার্ডের সুবিধাসমূহ</span>
            <svg class="move-arrow ml-2 w-6 h-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
            </svg>
        </button>

    </div>
</div>



<div class="container mx-auto my-8">
    <div class="p-4 rounded-3xl bg-gradient-to-r from-[#D01517] to-[#5D14E4]  text-white text-center">
        <div class="">
            <img src="{{ asset('public/images/logos/health_card.png') }}" alt="Health Card"
                class="mx-auto  h-60 mb-4">
        </div>

        <div class="mx-24 mb-4">
            <h2 class="text-2xl">ইারনাশনাল হলথ কােডর সুিবধাসমূহ: কাড এহীতা সপূণ িবনামূেল পােছন বছের একবার</h2>
            <p class=" mb-4 tiro-bangla-regular">
                ইারনাশনাল হলথ কােডর সুিবধাসমূহ: কাড এহীতা সপূণ িবনামূেল পােছন বছের একবার:
                িেভিটভ ফুল বিড় হলথ চক-আপ যমন: RBS, CBC (TC, DC, ESR, Hb%, Platelet, PCV, MCV,
                MCHC,RDW-CV), Creatinine,Urea, BUN, eGFR, Lipid Profile (Serum Total Cholesterol, Serum
                Triglycerides, Serum H.D.L-Cholesterol, Serum L.D.L-Cholesterol, Serum V.L.D.L-Cholesterol,
                Total Cholesterol / H.D.L. Ratio, L.D.L / H.D.L Ratio), Liver Profile (TotalBilirubin, Direct Bilirubin,
                Indirect Bilirubin, SGOT, SGPT, ALP, TP, ALB, AG Ratio), HbA1c, Uric Acid, Thyroid Profile (T3, T4,
                TSH), BMI অথবা :

            </p>
            <p class=" mb-4 tiro-bangla-regular">
                *গেনলিস াফাইল অথবা *িসিনয়র িসটেজন াফাইল অথবা *ি মারজ এ থালািসেময়া
                াফাইল অথবা & *চাই হলথ চক-আপ াফাইল

            </p>

        </div>
    </div>
</div>

<div class="container mx-auto">
    <div class="p-4 rounded-3xl bg-gradient-to-r from-[#D01517] to-[#5D14E4]  text-white text-center">
        <h2 class="text-2xl">িনেজেক সুরিত রাখেত াব ইারনাশনাল হলথ কাড কন নেবন :</h2>

        <div class="">
            <img src="{{ asset('public/images/logos/tube.png') }}" alt="Health Card"
                class="mx-auto  h-60 mb-4">
        </div>

        <div class="mx-24 mb-4">
            <p class=" mb-4 tiro-bangla-regular">
                রাগাাের পর সংামক বা অসংামক যেকােনা রাগ হেলই তার িকছু লণ দখা দয়। িকু িনয়িমত
                হলথ চক-আপ করােল অিধকাংশ রােগর াথিমক পযায় লণ কােশর পূেবই শনা হয়। াথিমক
                অবায় উপসগ থােক না িবধায় উচ রচাপ, দ্ রাগ, িকডিন রাগেক নীরব ঘাতক বলা হয় । হলথ চক-
                আেপর পাশাপািশ সেচতন ও সতক হেল যমন অেনক রাগ িতরাধ করা যায়, তমিন অেনক রাগ থেক
                াথিমক পযায়  খরেচ যুি পাওয়া যায়। রাগ িতরােধ এবং রােগর াথিমক পযায় িচিকৎসা র
                করার য়াজেন বছর ২ বার হলথ চক-আপ করা য়াজন।  খরেচ িেভিটভ হলথ চক-আপসহ
                িবিভ সুেযাগ-সুিবধা িনয় এেসেছ াব ইটারনাশনাল হলথ কাড।

            </p>

        </div>
    </div>
</div>


<div class="container mx-auto my-8">
    <div class="p-4 rounded-3xl text-white text-center flex justify-between">
        <div class="w-1/2">
            <div class="p-4  rounded-3xl bg-gradient-to-r from-[#D01517] to-[#5D14E4]  text-white text-center">

                <div class=" mb-4">
                    <p class=" mb-4 tiro-bangla-regular">
                        হলথ কাড হীতার এক বছেরর কম বয়সী সান থাকেল সই
                        সােনর াব ডায়াগনিক থেক সপূণ িবনামূেল সেবাচ ২৫
                        হাজার টাকা পযসকল কার রটন পাথলিজকাল ট
                        করােত পারেবন।
                        হলথ কাড হীতা পরবতীেত ৭০ হাজার টাকা পয রটন
                        পাথলিজকাল ট করােত পারেবন, যার 8০% বহন করেব
                        াব বাংলােদশ িলঃ আর৬০% বহন করেবন কাড হীতা।
                        আনিলিমেটড টিলেমিডিসন, ডর কনসালেটি এবং িভিডও
                        কিলংেয়র মাধেম িচিকৎসেকর পরামশ হেণর সুিবধা ধু
                        হলথ কাড হীতার জন ।
                        হলথ কাড হীতার বয়সসীমা ৩ মাস থেক ৬৫ বছর : ধু মা
                        হলথ কাড হীতার জন ১. সাধারণ মৃতু ৫০-০০০ টাকা ২.
                        দুঘটনায় মৃতু ১,০০,০০০ টাকা, ৩. ায়ী ৫০,০০০ টাকা এবং ৪.
                        covid মৃতু ৫০,০০০ টাকা ।

                    </p>

                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div class="">
                <img src="{{ asset('public/images/logos/child.png') }}" alt="Health Card"
                    class="mx-auto  h-60 w-90 mb-4">
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto my-8">
    <div class="p-4 rounded-3xl text-white text-center flex justify-between">

        <div class="w-1/2">
            <div class="">
                <img src="{{ asset('public/images/logos/hospital.png') }}" alt="Health Card"
                    class="mx-auto  h-60 w-90 mb-4">
            </div>
        </div>
        <div class="w-1/2">
            <div class="p-4 rounded-3xl bg-gradient-to-r from-[#D01517] to-[#5D14E4]  text-white text-center">

                <div class=" mb-4">
                    <p class=" mb-4 tiro-bangla-regular">
                        হলথ কাড হীতা দুঘটনাজিনভ কারেণ
                        হাসপাতােল ভি ত হেল িতিদন ১,০০০
                        টাকা কের িচিকৎসা ভাতা াপ হেবন
                        (সেবাচ ১০ িদন) ১০,০০০টাকা পয। এ
                        ে অবশই হাসপাতােলর
                        িচিকৎসাজিনত সকল ডকুেমট জমা
                        িদেত হেব । যখােন উীপন-পাব
                        হাসপাতাল ফািসিলট আেছ,(সখােন
                        উীপন-াব হাসপাতােলই ভি ত হেত
                        হেব

                    </p>

                </div>
            </div>
        </div>

    </div>
</div>
<div class="container mx-auto my-8">
    <div class="p-4 rounded-3xl text-white text-center flex justify-between">
        <div class="w-1/2">
            <div class="p-4  rounded-3xl bg-gradient-to-r from-[#D01517] to-[#5D14E4]  text-white text-center">

                <div class=" mb-4">
                    <p class=" mb-4 tiro-bangla-regular">
                        কৃিতর মেধই রেয়েছ আপনার শরীর ও াের
                        সেবাৎকৃ সুরা এবং িনরাপা । াব
                        ইটারনাশনাল হলথ কাড আপনােক এই সুরা
                        বলেয়র সান দওয়ার উেশই আপনার হােত তুেল
                        িদেছ সপূন  ◌্ ◌ াকৃিতক উপাদেন তির পাশ
                        িতিয়াহীন কৃিত ও পুি কাপসুলস্ এবং উীপন
                        িসডপুি পােকজ। িনেজেক সবদা কৃিতর সুরা
                        বলেয় রাখুন। রাগ শরীের বাসা বাধার আেগই িনেজর
                        মেধ এবং িনেজেক িঘের কৃিতর রাগ িতেরাধী বাসা
                        বাধুন।
                    </p>

                </div>
            </div>
        </div>
        <div class="w-1/2">
            <div class="">
                <img src="{{ asset('public/images/logos/family.png') }}" alt="Health Card"
                    class="mx-auto  h-60 w-90 mb-4">
            </div>
        </div>
    </div>
</div>

<div class="container mx-auto my-8">
    <div class="p-4 rounded-3xl text-white text-center flex justify-between">

        <div class="w-1/2">
            <div class="">
                <img src="{{ asset('public/images/logos/product.png') }}" alt="Health Card"
                    class="mx-auto  h-60 w-90 mb-4">
            </div>
        </div>
        <div class="w-1/2">
            <div class="p-4  rounded-3xl bg-gradient-to-r from-[#D01517] to-[#5D14E4]  text-white text-center">

                <div class=" mb-4">
                    <p class=" mb-4 tiro-bangla-regular">
                        া ও পুির অবা উয়েন িবনামূেল
                        দওয়া হেব াব ওেয়লেনস “কৃিত ও পুি”
                        িনউািসউটকাল কাপসুল ।
                        বািড়র আিনায় অথবা ছােদ পুিকর শাক-
                        সবিজ উৎপাদেনর িবনামূেল জন িসড
                        পােকজ দান করা হেব।

                    </p>

                </div>
            </div>
        </div>

    </div>
</div>

@endsection
