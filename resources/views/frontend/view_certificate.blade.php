<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verification Certificate</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;800&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Raleway', sans-serif; }
    @media print {
      .no-print { display: none; }
      body { background: white; }
    }
  </style>
</head>

<body class="bg-gray-200 flex items-center justify-center min-h-screen">

  <!-- Buttons -->
  <div class="fixed bottom-5 right-5 space-x-2 no-print">
    <button onclick="window.print()" class="px-5 py-2 bg-indigo-900 text-white rounded shadow font-bold">Print</button>
    <button onclick="generatePDF()" class="px-5 py-2 bg-green-500 text-white rounded shadow font-bold">Download</button>
    <button onclick="window.location.href='verify_student.php'" class="px-5 py-2 bg-gray-600 text-white rounded shadow font-bold">Back</button>
  </div>

  <!-- Certificate -->
  <div id="certificate-container" class="bg-white shadow-xl">
    <div class="w-[210mm] h-[297mm] p-[15mm] relative text-gray-700">

      <!-- Outer Border -->
      <div class="border-4 border-indigo-900 h-full p-[5mm] relative">
        <div class="border border-indigo-900 h-full p-[10mm] relative">

          <!-- Watermark -->
          <div class="absolute inset-0 flex items-center justify-center rotate-[-45deg] text-[120px] font-extrabold text-indigo-900 opacity-5 pointer-events-none">
            VERIFIED
          </div>

          <!-- Header -->
          <div class="flex justify-between items-center border-b-2 border-indigo-900 pb-2 relative z-10">

            <!-- Left -->
            <div class="flex items-center gap-3 w-1/3">
              <img src="head_office/upload/37506SKIITM.png" class="max-h-[100px] max-w-[110px] object-contain">
              <div id="top-qrcode" class="w-[60px] h-[60px] border border-indigo-900 p-[1px] bg-white"></div>
            </div>

            <!-- Center -->
            <div class="text-center w-1/3">
              <h1 class="text-[16px] font-extrabold text-indigo-900 uppercase">Student Verification Certificate</h1>
              <p class="text-[10px] font-bold text-gray-500">SKiiTM INSTITUTE</p>
            </div>

            <!-- Right -->
            <div class="w-1/3 flex justify-end">
              <img src="certificate/center/upload/73106img20260328_17010908.jpg"
                   class="w-[70px] h-[90px] border-2 border-indigo-900 p-[2px] object-cover">
            </div>

          </div>

          <!-- Body -->
          <div class="mt-10 relative z-10">
            <p class="text-center text-lg text-gray-600 mb-10">
              This is to certify that the following student record has been officially verified against our academic database.
            </p>

            <table class="w-full border-collapse">
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900 w-2/5">Student Name:</td>
                <td class="p-4 font-semibold">IKRA KHAN</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Roll Number:</td>
                <td class="p-4 font-semibold">SKIITM00463</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Father's Name:</td>
                <td class="p-4 font-semibold">Shahnawaz khan</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Mother's Name:</td>
                <td class="p-4 font-semibold">Aasiya Khan</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Date of Birth:</td>
                <td class="p-4 font-semibold">26-02-2012</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Course Name:</td>
                <td class="p-4 font-semibold">ADCA</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Course Duration:</td>
                <td class="p-4 font-semibold">12 Months</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Institution:</td>
                <td class="p-4 font-semibold">Lakshya Group Of Institutions</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Percentage:</td>
                <td class="p-4 font-semibold">0%</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Grade:</td>
                <td class="p-4 font-semibold">F</td>
              </tr>
              <tr class="border-b">
                <td class="p-4 font-bold text-indigo-900">Issue Date:</td>
                <td class="p-4 font-semibold">13-04-2026</td>
              </tr>
            </table>
          </div>

          <!-- Footer -->
          <div class="absolute bottom-[15mm] w-[90%] flex justify-between items-end z-10">

            <div class="w-[120px]"></div>

            <div class="text-center">
              <img src="https://img.icons8.com/ios/100/1a237e/signature.png"
                   class="h-[40px] opacity-60 mx-auto mb-2">

              <div class="border-t-2 border-indigo-900 w-[220px] mx-auto mb-1"></div>

              <p class="font-extrabold text-indigo-900">Authorized Signatory</p>
              <p class="text-sm text-gray-500">SKiiTM Institute Verification System</p>

              <p class="text-xs text-gray-400 mt-3">Certificate ID: 4D8D0EAA8707</p>
              <p class="text-[10px] text-gray-400">Generated on: 13-04-2026</p>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

  <script>
    window.onload = () => {
      const qr = document.getElementById("top-qrcode");
      new QRCode(qr, {
        text: "https://skiitminstitute.com/",
        width: 60,
        height: 60
      });
    };

    function generatePDF() {
      const element = document.getElementById('certificate-container');
      html2pdf().from(element).save('certificate.pdf');
    }
  </script>

</body>
</html>