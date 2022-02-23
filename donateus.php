<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index1.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title> Donate Here </title>
</head>
<body>

<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.8865403854!2d77.49085209765133!3d12.95395998682417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1643127111566!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0"id="don">
      <h2 class="text-gray-900 text-lg mb-1 font-extrabold title-font">Care4U NGO &#129503</h2>
      <p class="leading-relaxed mb-0 text-black">Help! Help! Help!</p>
    <form action="pay.php" method="post">
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm font-bold text-black">👤 Name</label>
        <input type="text" id="name" name="name" class="w-full bg border-2 border-pink-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your name">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm font-bold text-black">📲 Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border-2-2 border-2 border-pink-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your email">
      </div>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm font-bold text-black">📞 Contact</label>
        <input type="number" id="contact" name="contact" class="w-full bg-white rounded border-2 border-2 border-pink-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter your contact no.">
      </div>

      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm font-bold text-black">💰 Amount</label>
        <input type="number" id="amount" name="amount" class="w-full bg-white rounded border-2 -2border-2 border-pink-900 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" placeholder="Enter amount">
      </div>
      
      
      <button class="text-white bg-pink-500 border-8 py-2 px-6focus:outline-none hover:bg-indigo-600 rounded text-lg font-extrabold container">Donate</button>
    </div>
  
</form>
</div>
</body>
</html>