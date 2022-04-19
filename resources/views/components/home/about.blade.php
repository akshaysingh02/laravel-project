<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
  <div class="container">
    <div class="flex flex-wrap justify-between items-center -mx-4">
      <div class="w-full lg:w-6/12 px-4">
        <div class="flex items-center -mx-3 sm:-mx-4">
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me1.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
            <div class="py-3 sm:py-4">
              <img
                src="{{ url('/img/me_hero.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
            </div>
          </div>
          <div class="w-full xl:w-1/2 px-3 sm:px-4">
            <div class="my-4 relative z-10">
              <img
                src="{{ url('/img/me2.png') }}"
                alt=""
                class="rounded-2xl w-full"
              />
              <x-about-dots></x-about-dots>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
        <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                 "Hard work beats talent in the long run"
             </blockquote>
          </span>
          <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
            About Me
          </h2>
          <p class="text-base dark:text-gray-400 mb-8">
            I have been working as a professional software developer for 2+ years. <br />
            During my career I have worked on various types of projects with various technologies,
            That includes Reactjs and vanilla javascript projects, UI/UX design projects, CMS projects for 20+ clients on UpWork and fiverr. <br />
          </p>
          <p class="text-base dark:text-gray-400 mb-8">
            In 2020 I decided to start freelacing in the time of covid and decided to work on the real life projects to help people solve their probelms.
            <br />
            <br />
            My Strongest skills other than web developement is Data structure and algorithms and problem solving with C++<br />
          </p>
          <x-button-link href="https://www.linkedin.com/in/akshaysingh02/" variant="blue" target="_blank">
            Drop me a message
          </x-button-link>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== About Section End -->
