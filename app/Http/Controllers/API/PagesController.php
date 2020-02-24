<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use App\Http\Resources\Testimonial as TestimonialResource;
use App\Http\Resources\Work as WorkResource;
use App\Http\Resources\Job as JobResource;
use App\Http\Resources\Team as TeamResource;
use App\Http\Resources\HomeSlider as HomeSliderResource;
use App\Http\Resources\Service as ServiceResource;
use App\Http\Resources\Technology as TechnologyResource;
use App\Work;
use App\Job;
use App\Team;
use App\HomeSlider;
use App\Service;
use App\Technology;

class PagesController extends Controller
{

  public function home()
  {
    $data = array(
      'page' => 'home',
      // 'homeBaner_data' => array(
      //   array(
      //     'banner_img' => 'banner-slide1.jpg',
      //     'banner_subheading' => 'Let’s get ',
      //     'banner_heading' => 'started together',
      //     'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email \n templates, Hubspot, Shopify, Laravel...',
      //     'create_button' => 'Let’s  Create Your Website',
      //     'take_a_look' => 'Take a look over our work'
      //   ),
      //   array(
      //     'banner_img' => 'banner-slide1.jpg',
      //     'banner_subheading' => 'Let’s get dobara ',
      //     'banner_heading' => 'started sdf',
      //     'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email templates,',
      //     'create_button' => 'Let’s  Your Website',
      //     'take_a_look' => 'Take a look over ou',
      //   )
      // ),
      'homeAbout_data' => array(
        'imgMain' => 'about-image-home.jpg',
        'heading' => 'SWAP Development Pvt Ltd',
        'subheading' => 'We are not best than other, we are just Unique',
        'homeAbout_text' => 'We are not expert but we are really dedicated toward the work and responsible to deliver the best reuslts together. Our team is very ambicious and always after creating something fresh elegant. We love to design and develop ideas and bring them into existence.',
        'alternateText' => 'Have an idea? We would love to listen and discuss. W are excited to talk and listen.',
        'btnText' => 'Discuss with us',
        'btnUrl' => 'https://www.google.com/',
        'btnGetTouchText' => 'Get in touch',
        'btnGetTouchUrl' => 'https://www.google.com/',
      ),
      // "service_data" => array(
      //   array(
      //     'services_number' => '01',
      //     'services_subheading' => 'Website Design & Rebranding',
      //     'service_img' => 'service1.jpg',
      //     'service_head' => 'Online Ecommerce Solutions',
      //     'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
      //     'service_url_text' => 'Read More',
      //     'service_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'services_number' => '02',
      //     'services_subheading' => 'Website Design & Rebranding',
      //     'service_img' => 'service1.jpg',
      //     'service_head' => 'Online Ecommerce Solutions',
      //     'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
      //     'service_url_text' => 'Read More',
      //     'service_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'services_number' => '03',
      //     'services_subheading' => 'Website Design & Rebranding',
      //     'service_img' => 'service1.jpg',
      //     'service_head' => 'Online Ecommerce Solutions',
      //     'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
      //     'service_url_text' => 'Read More',
      //     'service_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'services_number' => '04',
      //     'services_subheading' => 'Website Design & Rebranding',
      //     'service_img' => 'service1.jpg',
      //     'service_head' => 'Online Ecommerce Solutions',
      //     'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
      //     'service_url_text' => 'Read More',
      //     'service_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'services_number' => '04',
      //     'services_subheading' => 'Website Design & Rebranding',
      //     'service_img' => 'service1.jpg',
      //     'service_head' => 'Online Ecommerce Solutions',
      //     'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
      //     'service_url_text' => 'Read More',
      //     'service_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'services_number' => '04',
      //     'services_subheading' => 'Website Design & Rebranding',
      //     'service_img' => 'service1.jpg',
      //     'service_head' => 'Online Ecommerce Solutions',
      //     'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
      //     'service_url_text' => 'Read More',
      //     'service_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'services_number' => '04',
      //     'services_subheading' => 'Website Design & Rebranding',
      //     'service_img' => 'service1.jpg',
      //     'service_head' => 'Online Ecommerce Solutions',
      //     'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
      //     'service_url_text' => 'Read More',
      //     'service_url' => 'https://google.com/',
      //   ),
      // ),
      'technologies_data' => array(
        // 'tech_images' => array(
        //   array(
        //     'image' => 'technology1.png',
        //     'alt_tag' => 'react',
        //   ),
        //   array(
        //     'image' => 'technology2.png',
        //     'alt_tag' => 'Adobe Photoshop',
        //   ),
        //   array(
        //     'image' => 'technology3.png',
        //     'alt_tag' => 'Adobe illustrator',
        //   ),
        //   array(
        //     'image' => 'technology4.png',
        //     'alt_tag' => 'Node js',
        //   ),
        //   array(
        //     'image' => 'technology5.png',
        //     'alt_tag' => 'Shopify',
        //   ),
        //   array(
        //     'image' => 'technology6.png',
        //     'alt_tag' => 'Laravel',
        //   ),
        //   array(
        //     'image' => 'technology7.png',
        //     'alt_tag' => 'Magento',
        //   ),
        //   array(
        //     'image' => 'technology8.png',
        //     'alt_tag' => 'Php',
        //   ),
        //   array(
        //     'image' => 'technology9.png',
        //     'alt_tag' => 'Angular js',
        //   ),
        //   array(
        //     'image' => 'technology10.png',
        //     'alt_tag' => 'Hubspot',
        //   ),
        //   array(
        //     'image' => 'technology11.png',
        //     'alt_tag' => 'Vue Js',
        //   ),
        //   array(
        //     'image' => 'technology12.png',
        //     'alt_tag' => 'Elementor Wordpress',
        //   )
        // ),
        'tech_content' => array(
          'heading' => 'Technologis we are working with',
          'text' => 'We are passnate about new learning so we are not just single technologes based. We believe to keep our skils up to date and we welome our clients choice of technologies.',
          'subheading' => 'Looking for something else?',
          'btnText' => 'Let Us Know!',
          'btnUrl' => 'https://google.com/',
        ),
        'tech_alternate' => array(
          'heading' => 'Have an idea? We are here to discuss, we are excited to get started together.',
          'btnText' => 'Share your requirement',
          'btnUrl' => 'https://google.com/',
          'getbtnText' => 'Get in Touch!',
          'getbtnUrl' => 'https://google.com/',
        )
      ),
      'counter_data' => array(
        'counterText' => array(
          'heading' => 'We are ready to take the challenge',
          'text' => 'Is your website look and feel gets bored? Well, give a surprize to you customer by giving a fresh look to you business.',
          'btn' => 'Start your Project Today!',
          'btnUrl' => 'https://google.com/',
        ),
        'odometer' => array(
          array(
            'number' => '73',
            'text' => 'Current Jobs'
          ),
          array(
            'number' => '50',
            'text' => 'Team Size'
          ),
          array(
            'number' => '1000',
            'text' => 'Total Jobs'
          ),
          array(
            'number' => '50000',
            'text' => 'Total Hours Worked'
          ),
        ),
      ),
      'portfolio_data' => array(
        'topHeading' => array(
          'heading' => 'Our Work',
          'subHeading' => 'Our lovely clients so far',
          'viewbtn' => 'View All Work',
        ),
        // 'slider_data' => array(
        //     array(
        //         'portfolio_img' => 'portfolio1.jpg',
        //         'brandcard' => 'Business Card Design',
        //         'brandcard_url' => 'https://google.com/',
        //         'barnding' => 'Branding',
        //         'branding_url' => 'https://google.com/',
        //         'business_title' => 'Business Card',
        //         'business_dev' => 'Swapdevelopment, 28th Jan, 2020',
        //         'business_like' => 'Like',
        //     ),
        //     array(
        //         'portfolio_img' => 'portfolio1.jpg',
        //         'brandcard' => 'Business Card Design',
        //         'brandcard_url' => 'https://google.com/',
        //         'barnding' => 'Branding',
        //         'branding_url' => 'https://google.com/',
        //         'business_title' => 'Business Card',
        //         'business_dev' => 'Swapdevelopment, 28th Jan, 2020',
        //         'business_like' => 'Like',
        //     ),
        //     array(
        //         'portfolio_img' => 'portfolio1.jpg',
        //         'brandcard' => 'Business Card Design',
        //         'brandcard_url' => 'https://google.com/',
        //         'barnding' => 'Branding',
        //         'branding_url' => 'https://google.com/',
        //         'business_title' => 'Business Card',
        //         'business_dev' => 'Swapdevelopment, 28th Jan, 2020',
        //         'business_like' => 'Like',
        //     ),
        //     array(
        //         'portfolio_img' => 'portfolio1.jpg',
        //         'brandcard' => 'Business Card Design',
        //         'brandcard_url' => 'https://google.com/',
        //         'barnding' => 'Branding',
        //         'branding_url' => 'https://google.com/',
        //         'business_title' => 'Business Card',
        //         'business_dev' => 'Swapdevelopment, 28th Jan, 2020',
        //         'business_like' => 'Like',
        //     ),
        // ),
      ),
      // 'testimonial_data' => array(
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     )
      // )
    );
    $data['homeBaner_data'] = HomesliderResource::collection(Homeslider::all());
    $data['testimonial_data'] = TestimonialResource::collection(Testimonial::all());
    $data['service_data'] = ServiceResource::collection(Service::all());
    $data['technologies_data']['tech_images'] = TechnologyResource::collection(Technology::all());
    $data['portfolio_data']['slider_data'] = WorkResource::collection(Work::all());
    $data = array_merge($data, $this->globalDetails());
    return response()->json($data);
  }

  /*     * *
     * About Us Page
     * */

  public function about()
  {
    $data = array(
      'page' => 'about',
      'page_heading' => 'About Us',
      'technologies_data' => array(
        'tech_images' => array(
          array(
            'image' => 'technology1.png',
            'alt_tag' => 'react',
          ),
          array(
            'image' => 'technology2.png',
            'alt_tag' => 'Adobe Photoshop',
          ),
          array(
            'image' => 'technology3.png',
            'alt_tag' => 'Adobe illustrator',
          ),
          array(
            'image' => 'technology4.png',
            'alt_tag' => 'Node js',
          ),
          array(
            'image' => 'technology5.png',
            'alt_tag' => 'Shopify',
          ),
          array(
            'image' => 'technology6.png',
            'alt_tag' => 'Laravel',
          ),
          array(
            'image' => 'technology7.png',
            'alt_tag' => 'Magento',
          ),
          array(
            'image' => 'technology8.png',
            'alt_tag' => 'Php',
          ),
          array(
            'image' => 'technology9.png',
            'alt_tag' => 'Angular js',
          ),
          array(
            'image' => 'technology10.png',
            'alt_tag' => 'Hubspot',
          ),
          array(
            'image' => 'technology11.png',
            'alt_tag' => 'Vue Js',
          ),
          array(
            'image' => 'technology12.png',
            'alt_tag' => 'Elementor Wordpress',
          )
        ),
        'tech_content' => array(
          'heading' => 'Technologis we are working with',
          'text' => 'We are passnate about new learning so we are not just single technologes based. We believe to keep our skils up to date and we welome our clients choice of technologies.',
          'subheading' => 'Looking for something else?',
          'btnText' => 'Let Us Know!',
          'btnUrl' => 'https://google.com/',
        ),
        'tech_alternate' => array(
          'heading' => 'Have an idea? We are here to discuss, we are excited to get started together.',
          'btnText' => 'Share your requirement',
          'btnUrl' => 'https://google.com/',
          'getbtnText' => 'Get in Touch!',
          'getbtnUrl' => 'https://google.com/',
        )
      ),
      // 'team_data' => array(
      //   array(
      //     'team_name' => 'Shalini Kashyap',
      //     'team_designation' => 'TL / Webdesigner',
      //     'team_about' => 'Apart from that we are looking for partner agency who’s aim and vision is quit similar to us. ',
      //     'hire_btn' => 'Hire',
      //     'hire_url' => 'https://google.com/',
      //     'resume_btn' => 'Resume',
      //     'resume_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'team_name' => 'Shalini Kashyap',
      //     'team_designation' => 'TL / Webdesigner',
      //     'team_about' => 'Apart from that we are looking for partner agency who’s aim and vision is quit similar to us. ',
      //     'hire_btn' => 'Hire',
      //     'hire_url' => 'https://google.com/',
      //     'resume_btn' => 'Resume',
      //     'resume_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'team_name' => 'Shalini Kashyap',
      //     'team_designation' => 'TL / Webdesigner',
      //     'team_about' => 'Apart from that we are looking for partner agency who’s aim and vision is quit similar to us. ',
      //     'hire_btn' => 'Hire',
      //     'hire_url' => 'https://google.com/',
      //     'resume_btn' => 'Resume',
      //     'resume_url' => 'https://google.com/',
      //   ),
      //   array(
      //     'team_name' => 'Shalini Kashyap',
      //     'team_designation' => 'TL / Webdesigner',
      //     'team_about' => 'Apart from that we are looking for partner agency who’s aim and vision is quit similar to us. ',
      //     'hire_btn' => 'Hire',
      //     'hire_url' => 'https://google.com/',
      //     'resume_btn' => 'Resume',
      //     'resume_url' => 'https://google.com/',
      //   ),
      // ),
      'homeBaner_data' => array(
        array(
          'banner_img' => 'banner-slide1.jpg',
          'banner_subheading' => 'Let’s get ',
          'banner_heading' => 'started together',
          'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email \n templates, Hubspot, Shopify, Laravel...',
          'create_button' => 'Let’s  Create Your Website',
          'take_a_look' => 'Take a look over our work'
        ),
        array(
          'banner_img' => 'banner-slide1.jpg',
          'banner_subheading' => 'Let’s get dobara ',
          'banner_heading' => 'started sdf',
          'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email templates,',
          'create_button' => 'Let’s  Your Website',
          'take_a_look' => 'Take a look over ou',
        )
      ),
      "service_data" => array(
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
      ),
      // 'testimonial_data' => array(
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     )
      // )
    );
    $data['testimonial_data'] = TestimonialResource::collection(Testimonial::all());
    $data['team_data'] = TeamResource::collection(Team::all());
    $data = array_merge($data, $this->globalDetails());
    return response()->json($data);
  }

  /*     * *
     * Portfolio Page
     * */

  public function portfolio()
  {
    $data = array(
      'page' => 'portfolio',
      'homeBaner_data' => array(
        array(
          'banner_img' => 'banner-slide1.jpg',
          'banner_subheading' => 'Let’s get ',
          'banner_heading' => 'started together',
          'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email \n templates, Hubspot, Shopify, Laravel...',
          'create_button' => 'Let’s  Create Your Website',
          'take_a_look' => 'Take a look over our work'
        ),
        array(
          'banner_img' => 'banner-slide1.jpg',
          'banner_subheading' => 'Let’s get dobara ',
          'banner_heading' => 'started sdf',
          'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email templates,',
          'create_button' => 'Let’s  Your Website',
          'take_a_look' => 'Take a look over ou',
        )
      ),
      "service_data" => array(
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
      ),
      // 'testimonial_data' => array(
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     )
      // )
    );
    $data['testimonial_data'] = TestimonialResource::collection(Testimonial::all());
    $data = array_merge($data, $this->globalDetails());
    return response()->json($data);
  }

  /*     * *
     * Services Page
     * */

  public function services()
  {
    $data = array(
      'page' => 'services',
      'homeBaner_data' => array(
        array(
          'banner_img' => 'banner-slide1.jpg',
          'banner_subheading' => 'Let’s get ',
          'banner_heading' => 'started together',
          'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email \n templates, Hubspot, Shopify, Laravel...',
          'create_button' => 'Let’s  Create Your Website',
          'take_a_look' => 'Take a look over our work'
        ),
        array(
          'banner_img' => 'banner-slide1.jpg',
          'banner_subheading' => 'Let’s get dobara ',
          'banner_heading' => 'started sdf',
          'banner_description' => 'Ecommerce shop, Wordpress, Landing pages Email templates,',
          'create_button' => 'Let’s  Your Website',
          'take_a_look' => 'Take a look over ou',
        )
      ),
      "service_data" => array(
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
        array(
          'services_number' => '01',
          'services_subheading' => 'Website Design & Rebranding',
          'service_img' => 'service1.jpg',
          'service_head' => 'Online Ecommerce Solutions',
          'service_desc' => 'Create awesome looking and fast loading webshops and Web Application with us',
          'service_url_text' => 'Read More',
          'service_url' => 'https://google.com/',
        ),
      ),
      // 'testimonial_data' => array(
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     ),
      //     array(
      //         'testimonial_text' => 'Swap Development has become an asset to our team. They are website experts! They can do anything you need. From custom coding to learning new platforms, they are experts! We are so happy to find a company like Swap…. We are not ending contract, just moving some things around. Thanks again for everything your teams does!',
      //         'testimonial_img' => 'user.jpg',
      //         'testimonial_user' => 'Jack Ikard',
      //         'testimonial_designation' => 'Founder at AquaSprouts LLC'
      //     )
      // )
    );
    $data['testimonial_data'] = TestimonialResource::collection(Testimonial::all());
    $data = array_merge($data, $this->globalDetails());
    return response()->json($data);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  protected function globalDetails()
  {
    return array(
      'logo' => 'logo.png',
      'navbar_cta' => array(
        'text' => 'Start a project today!',
        'seperator' => 'or',
        'alternate_text' => 'Contact Us',
        'alternate_link' => '/contact',
      ),
      'store_cta' => array(
        'store_text' => 'Our Store',
        'store_link' => '/store'
      ),
      'navigation' => array(
        array(
          'text' => 'Home',
          'url' => '/'
        ),
        array(
          'text' => 'About Us',
          'url' => '/about'
        ),
        array(
          'text' => 'Portfolio',
          'url' => '/portfolio'
        ),
        array(
          'text' => 'Services',
          'url' => '/services'
        ),
      ),
      'footer' => array(
        'start_imgs' => array(
          array(
            'image' => 'golance.png',
            'url' => 'https://google.com/'
          ),
          array(
            'image' => 'adobe.png',
            'url' => 'https://google.com/'
          ),
          array(
            'image' => 'upwork.png',
            'url' => 'https://google.com/'
          ),
          array(
            'image' => 'behance.png',
            'url' => 'https://google.com/'
          ),
        ),
        'about' => array(
          'title' => 'About SWAP Development',
          'sub_title' => 'We are passionate about Web Design and Development and this almost run into our veins.',
          'description' => 'We are an enthusiastic learner and love to experiment with new technologies so that we can enhance the user experience for our clients at every step. '
        ),
        'contact' => array(
          'title' => 'Our Contact Details',
          'phone' => '0172 4016177',
          'email' => 'info@swapdevelopment.com',
          'address' => 'SWAP Development Pvt Ltd, Phase XI, Mohali'
        ),
        'social_network' => array(
          "facebook" => "#",
          "twitter" => "#",
          'linkedin' => "#",
          'whatsapp' => "#",
          'skype' => "#"
        ),
        'copyright' => '© 2020 Swap Development Pvt Ltd All Rights Reserved',
        'inquiry_form' => array(
          'title' => 'Let\’s Talk',
          'sub_title' => 'We would love to answer, what you got',
          'form_title' => 'Send us your enquery',
          'form_button' => 'submit'
        )
      )
    );
  }
}
