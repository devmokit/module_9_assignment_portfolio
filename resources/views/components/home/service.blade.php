@php
    $services = [
            [
                "id"=> 1,
                "title"=> "Web Design",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident abnulla quod dignissimos vel non corrupti doloribus voluptatum eveniet",
            ],
            [
                "id"=> 2,
                "title"=> "Web Development",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident abnulla quod dignissimos vel non corrupti doloribus voluptatum eveniet",
            ],        
            [
                "id"=> 3,
                "title"=> "Branding",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident abnulla quod dignissimos vel non corrupti doloribus voluptatum eveniet",
            ],        
            [
                "id"=> 4,
                "title"=> "UI/UX Design",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident abnulla quod dignissimos vel non corrupti doloribus voluptatum eveniet",
            ],        
            [
                "id"=> 5,
                "title"=> "Mobile Application",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident abnulla quod dignissimos vel non corrupti doloribus voluptatum eveniet",
            ],        
            [
                "id"=> 6,
                "title"=> "Game Development",
                "description"=> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident abnulla quod dignissimos vel non corrupti doloribus voluptatum eveniet",
            ]     
        ]
@endphp

<section class="bg-white" id="service">
    <div id="feature" class="container px-6 py-10 mx-auto">
      <h1
        class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl "
      >
        explore our <br />
        awesome <span class="text-blue-500">Services</span>
      </h1>

      <div
        class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-16 md:grid-cols-2 xl:grid-cols-3"
      >
      @foreach ($services as $service)
          <div
         
          class="flex flex-col items-center p-6 space-y-3 text-center bg-gray-100 rounded-xl hover:bg-gray-200"
        >
          <span
            class="inline-block px-4 py-2 text-blue-500 bg-blue-100 rounded-full "
          >
            {{ $service['id'] }}
          </span>

          <h1
            class="text-xl font-semibold text-gray-700 capitalize "
          >
            {{ $service['title'] }}
          </h1>

          <p class="text-gray-500 ">
            {{ $service['description'] }}
          </p>

          <a
            href="#"
            class="flex items-center -mx-1 text-sm text-blue-500 capitalize transition-colors duration-300 transform dark:text-blue-400 hover:underline hover:text-blue-600 dark:hover:text-blue-500"
          >
            <span class="mx-1">read more</span>
            <svg
              class="w-4 h-4 mx-1 rtl:-scale-x-100"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
        </div>
      @endforeach
      </div>
    </div>
  </section>