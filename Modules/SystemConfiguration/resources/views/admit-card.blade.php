<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        {{ config('app.name') }}
    </title>

    @include('layouts.pdf.pdf-style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'solaimanlipi', sans-serif;
            line-height: 1.2;
            font-size: 16px;
            font-weight: 500;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .font_weight_600 {
            font-weight: 600 !important;
        }

        .container {
            width: 950px;
            margin: 20px auto;
            border: 4px solid #e8dada;
            background: #fff;
            padding: 15px 20px;
            position: relative;
            opacity: .90;
        }

        .header {
            text-align: center;
            position: relative;
        }

        .header img {
            max-height: 150px;
            position: absolute;
            top: -15px;
            left: 0px;
        }

        .header h1 {
            font-size: 48px;
            margin: 0;
            color: #FF6600;
            font-weight: bold;
        }

        .header h2 {
            font-size: 20px;
            margin: 5px 0;
            font-weight: bold;
        }

        .certificate-title {
            text-align: center;
            background: #000;
            color: #fff;
            font-size: 20px;
            padding: 5px 30px;
            margin: 0;
            margin-bottom: 5px;
            display: inline-block;
            border-radius: 30px;
        }

        .sub-header {
            text-align: center;
            margin: 5px 0;
            font-size: 16px;
        }

        .form-number1 {
            background: #FFF899;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
            margin: 10px 0;
            text-align: left !important;
        }

        .contact-section {
            position: absolute;
            right: 15px;
            top: 15px;
            text-align: right;
        }

        .form-number-container {
            display: flex;
            justify-content: space-between;
            margin: 0;
            font-size: 16px;
            font-weight: bold;
            margin-top: 70px;
        }

        .form-number-container div {
            flex: 0 0 27%;
            background: #FFF899;
            padding: 10px;
            text-align: center;
        }

        .form-number-container div:last-child {
            flex: 0 0 67%;
            background: #fff;
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            display: inline-block;
            margin: 10px 0;
            margin-left: 10px;
            text-align: left !important;
            border: 1px solid #e8dada;

        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        .content table td {
            padding: 0 10px;
            border: 1px solid #e8dada;
            font-size: 16px;
        }

        .content table td.label {
            width: 12%;
            font-size: 16px;
            font-weight: bold;
        }

        .side-image {
            border: 1px dashed #e8dada;
            width: 100px;
            height: 100px;
            text-align: center;
            line-height: 16px;
            margin: 5px auto;
        }

        .signature-section {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .signature {
            text-align: center;
            font-size: 16px;
            font-weight: 600;
        }

        .signature p {
            margin: 5px 0;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            font-weight: bold;
        }

        .contact-section p {
            display: flex;
            /* Align icon and text horizontally */
            align-items: center;
            /* Vertically center content */
            margin: 0 0 5px 0;
            /* Reduce space between rows */
            font-size: 12px;
            /* Adjust font size */
        }

        .contact-section i {
            display: inline-flex;
            /* Ensures proper alignment for icons */
            justify-content: center;
            /* Center the icon in the background */
            align-items: center;
            /* Center the icon vertically */
            width: 15px;
            /* Circular width */
            height: 15px;
            /* Circular height */
            margin-right: 5px;
            /* Space between icon and text */
            font-size: 12px;
            /* Icon size */
            color: #fff;
            /* Icon color (white for better contrast) */
            background-color: #007BFF;
            /* Background color (e.g., Bootstrap primary) */
            border-radius: 50%;
            /* Circular shape */
            padding: 5px;
            /* Short padding inside the icon */
        }

        .contact-section i:hover {
            background-color: #0056b3;
            /* Darker background on hover */
        }

        .rules h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 20px;
        }

        .rules ol {
            margin: 0;
            padding-left: 20px;
        }

        .rules li {
            margin-bottom: 10px;
            /* font-size: 16px; */
        }

        .rules p {
            margin-top: 20px;
            font-size: 14px;
        }

        .rules a {
            color: blue;
            text-decoration: none;
        }

        .rules a:hover {
            text-decoration: underline;
        }

        /* Background transparency and centering */
    </style>
</head>

<body>
    <div class="noprint print-download-buttons">
        @include('layouts.pdf.back-button')
        @include('layouts.pdf.print-button')
    </div>
    <div style="clear: both;"></div>

    <div id="print-full-area">
        <div class="form-view" id="print_vh"
            style="background-image: url('{{ asset('assets/img/bg.png') }}'); background-repeat: no-repeat;
           background-position: center top 110px; background-size: 250px 250px; padding: 0;">

            <!-- Start প্রবেশপত্র -->
            <div class="container">
                <!-- Header Section -->
                <div class="header">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
                    <h2>বিসমিল্লাহির রাহমানির রাহিম</h2>
                </div>

                <!-- Sub Header -->
                <div class="sub-header">
                    <!-- Certificate Title -->
                    <div class="certificate-title">
                        প্রবেশপত্র
                    </div>
                    <p style="line-height: 1.5">
                        {{-- <strong>কেন্দ্র নাম:</strong> বজ্রযোগিনী জয় কালী উচ্চ বিদ্যালয় <br>
                        বজ্রযোগিনী মুন্সিগঞ্জ সদর
                        মুন্সিগঞ্জ --}}
                    </p>
                </div>
                <!-- Form Number -->
                <div class="form-number-container">
                    <div class="form-number1">ফরম নম্বর: {{ $data->form_no }}</div>
                    <div class="form-number2">শিক্ষা প্রতিষ্ঠানের নাম: <span
                            style="font-weight: 400">{{ $data->school?->school_name }}</span> </div>
                </div>

                <!-- Contact Section -->
                <div class="contact-section">
                    <p>

                        <i style="background-color: rgb(218, 98, 18); margin-top: -15px;"
                            class="fas fa-map-marker-alt"></i>
                        <strong>শিকদার মার্কেট, কামাড়খাড়া বাজার, <br> টংগিবাড়ী মুন্সিগঞ্জ</strong>
                    </p>
                    <p><i style="background-color: rgb(29, 203, 216); margin-top: -15px;" class="fas fa-phone-alt"></i>
                        <strong>+8801929139200,
                            +8801853464627 <br>
                            +8801708956133</strong>
                    </p>
                    <p style="margin-top: -10px;"><i style="background-color: rgb(74, 74, 241);"
                            class="fab fa-facebook"></i>
                        <strong>
                            http://www.facebook.com/org.bmsf</strong>
                    </p>

                    <p><i style="background-color: rgb(18, 202, 18); " class="fab fa-whatsapp"></i>
                        <strong>
                            +8801643552015</strong>
                    </p>

                    <p><i style="background-color: red;" class="fas fa-envelope"></i>
                        <strong>org.bmsf@gmail.com</strong>
                    </p>
                </div>

                <!-- Content Section -->
                <div class="content">
                    <table>
                        <tr>
                            <td rowspan="4" class="side-image">
                                <img src="{{ asset('uploads/images/students') }}/{{ $data->image }}" alt=""
                                    style="width: 95px; height: 95px;">
                            </td>
                            <td class="label">নাম</td>
                            <td style="font-weight: 600"> {{ $data->sname }} </td>
                            <td class="label">রোল নম্বর</td>
                            <td style="font-weight: 600"> {{ $data->upazila?->code }}-{{ $data->roll }}</td>
                        </tr>
                        <tr>
                            <td class="label">পিতার নাম</td>
                            <td style="font-weight: 600">{{ $data->fname }}</td>
                            <td class="label">মাতার নাম</td>
                            <td style="font-weight: 600">{{ $data->mname }}</td>
                        </tr>
                    </table>
                </div>
                <!-- Signature Section -->
                <div class="signature-section">
                    <div class="signature">
                        <p style="margin-top: 35px;">
                        </p>
                        <p style="border-top: 1px solid black;  padding-top: 10px;">প্রধান শিক্ষক</p>
                    </div>
                    <div class="signature">
                        <p>
                            <img src="{{ asset('assets/img/porikkha_niontrok.png') }}" alt="Logo"
                                style="width: 120px; height: 50px; margin-top: -30px; padding: 0; margin: 0; margin-top: -30px;">
                        </p>

                        <p style="border-top: 1px solid black;  padding-top: 10px;">পরীক্ষা নিয়ন্ত্রক</p>
                    </div>
                    <div class="signature">
                        <p>
                            <img src="{{ asset('assets/img/shovapoti.png') }}" alt="Logo"
                                style="width: 120px; height: 50px; margin-top: -30px; padding: 0; margin: 0; margin-top: -30px;">
                        </p>
                        <p style="border-top: 1px solid black; padding-top: 10px;">সভাপতি</p>
                    </div>

                    <div class="signature"
                        style="display: flex; flex-direction: column; gap: 10px; max-width: 300px; margin-top: -40px;">
                        <p style="font-size: 16px; margin: 0;">
                            শ্রেণি: <span
                                style="display: inline-block; border: 1px solid #e8dada; padding: 10px 20px; border-radius: 4px; min-width: 100px; text-align: center;">{{ $data->sclass }}</span>
                        </p>
                        <p style="font-size: 16px; margin: 0;">
                            তারিখ: <span
                                style="display: inline-block; border: 1px solid #e8dada; padding: 10px 20px; border-radius: 4px; min-width: 100px; text-align: center;">
                                {{ \Carbon\Carbon::parse($data->created_at)->format('d/m/Y') }}
                            </span>
                        </p>
                    </div>

                </div>

                <div style="margin-top: 50px;" class="rules">
                    <h1>পরীক্ষার্থীর জন্য নির্দেশাবলী</h1>
                    <ol>
                        <li>১।
                            <span>প্রবেশপত্রে কোনো প্রকার ভুলত্রুটি পরিলক্ষিত হলে তা পরীক্ষার পূর্বেই সংশ্লিষ্ট কর্তৃপক্ষকে অবহিত করুন। ভুল বা অসম্পূর্ণ প্রবেশপত্র </span>
                            <br>
                            <span style="margin-left: 20px; line-height: 26px;">
                                দ্বারা কোনোক্রমে
                                পরীক্ষায় অংশগ্রহণ করা যাবে
                                না।
                            </span>
                        </li>
                        <li>২। বিক্রমপুর মানব সেবা ফাউন্ডেশন কর্তৃক নির্ধারিত দিন, তারিখ ও সময়সূচি অনুযায়ী পরীক্ষায় অংশগ্রহণ করতে হবে।</li>
                        <li>৩। পরীক্ষার দিন নির্ধারিত সময়ের আধাঘণ্টা আগে পরীক্ষা হলের দরজা খোলা হবে। এবং নির্ধারিত সময়ের অত্যন্ত ২০ মিনিট আগে নিজ নিজ
                            <span style="margin-left: 25px; line-height: 26px;">
                                আসন গ্রহণ করতে হবে।
                            </span>
                        </li>
                        <li>৪। পরীক্ষার হলে পরীক্ষার্থী ছাড়া তার কোন শিক্ষক, আত্মীয়-স্বজন বা আপনজন প্রবেশ নিষেধ।</li>
                        <li>৫। মূল উত্তরপত্রের নিদিষ্ট স্থানে প্রয়োজনীয় সকল তথ্য নির্ভুলভাবে লিখতে হবে এবং সংশ্লিষ্ট বৃত্ত ভরাট করতে হবে।</li>
                        <li>৬। পরীক্ষার্থীকে উপস্থিতি পত্রে স্বাক্ষর করতে হবে, অন্যথায় পরীক্ষায় পরীক্ষার্থীকে অনুপস্থিত বলে গণ্য হবে।</li>
                        <li>৭। পরীক্ষার হলে প্রবেশপত্র, কলম, পেন্সিল ও টাকা-পয়সা ব্যতীত পরীক্ষার্থীর সঙ্গে অন্যকিছু থাকা অবৈধ।
                        </li>
                        <li>৮। মোবাইল ফোনসহ অন্যান্য ইলেকট্রনিকস পণ্য নিয়ে পরীক্ষার হলে প্রবেশ নিষে্ধ।</li>
                        <li>৯। পরীক্ষা কেন্দ্রে আইন-শৃঙ্খলা ভঙ্গকারী অথবা এ কাজে প্ররোচনাদানকারী পরীক্ষার্থীর বিরুদ্ধে তাৎক্ষণিকভাবে আইনানুগ ব্যবস্থা গ্রহণ করা হবে।
                          
                          
                        </li>
                        <li>১০। প্রশ্ন ও উত্তরপত্র পাওয়ার পর পরীক্ষা শেষ হওয়ার আগ পর্যন্ত কোনো শিক্ষার্থী নিজ আসন ত্যাগ করতে পারবে না। বিরতিহীনভাবে পরীক্ষা চলমান থাকবে।
                        </li>
                        <li>১১। পরীক্ষা হলের ইনভিজিলেটর ও সংশ্লিষ্ট অফিসার ইন-চার্জ কর্তৃক আরোপিত নির্দেশাবলি যথাযথভাবে মেনে চলতে হবে।</li>
                        <li>১২। উত্তরপত্রের পৃষ্ঠায় মুদ্রিত নির্দেশাবলি অবশ্যই মেনে চলতে হবে।</li>
                        <li>১৩। মূল প্রবেশপত্র সঙ্গে আনতে হবে।</li>
                    </ol>
                    <div style="text-align: center">
                        <p>বি.দ্র. পরীক্ষার পর সর্বোচ্চ ০১ মাসের মধ্যে সংগঠনের ওয়েবসাইটে  <a href="http://www.manabseba.org"
                                target="_blank">www.manabseba.org</a> ফলাফল প্রকাশ করা হবে।</p>
                        <p>(মেধাবৃত্তি সকল তথ্য জানতে নজর রাখুন আমাদের সংগঠনের ফেসবুক পেজ ও ওয়েবসাইটে)</p>
                    </div>

                </div>
            </div>
            <!-- End প্রবেশপত্র -->
        </div>
    </div>

    {{-- Scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
        integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        /**
         * Download PDF
         *
         * @param {string} fileName timestamp default
         * @param {string} elementId
         */
        function download(fileName = null, elementId = 'print_vh') {
            var element = document.getElementById(elementId);

            if (fileName == null) {
                // file name from page title.
                fileName = document.title;
            }

            // Give a name.
            var opt = {
                margin: 0,
                filename: fileName + '.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3,
                    dpi: 96,
                    letterRendering: true
                },
                jsPDF: {
                    unit: 'in',
                    format: 'A4',
                    orientation: 'portrait'
                },
                pagebreak: {
                    before: '.page2el'
                }
            };

            // New Promise-based usage:
            html2pdf().set(opt).from(element).save();
        }
    </script>
</body>

</html>
