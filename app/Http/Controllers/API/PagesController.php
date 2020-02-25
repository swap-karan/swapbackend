<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimonial;
use App\Http\Resources\Testimonial as TestimonialResource;
use App\Http\Resources\Work as WorkResource;
use App\Http\Resources\Job as JobResource;
use App\Http\Resources\Team as TeamResource;
use App\Http\Resources\Homeslider as HomesliderResource;
use App\Http\Resources\Service as ServiceResource;
use App\Http\Resources\Technology as TechnologyResource;
use App\Http\Resources\Timeline as TimelineResource;
use App\Work;
use App\Job;
use App\Team;
use App\Homeslider;
use App\Service;
use App\Technology;
use App\Timeline;

class PagesController extends Controller
{

  public function home()
  {
    $data = array(
      // Use voyager page block 
      // https://github.com/pvtl/voyager-page-blocks
      'page' => 'home',
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
      
      'technologies_data' => array(
       
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
      
      ),
    
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

    public function about(){
      $data = array(
      'page' => 'about',
      'page_heading' => 'About Us',
      'page_SubHeading' => 'A group of creative and innovative peoples. We are dedicated taward our goals. We believe to deliver quality work not believe on numers only.',
      'page_Text' => 'Elementor become a super tool / plugin for wordpress to create website in very less time and efforts. Its has more paid elements which are really amazing and super easy to use, Just drop and drag. Its save a lot of time for the developer as well as for designer. Elementor also having powerful inbduilt elements.',

      'about_Sec' => array(
          'image' => 'about_img.jpg',
          'heading' => 'Checkout a small video of our office work environment. It might help you to know more about our crew.',
          'text' => 'We would love to speak about your upcoming project and more. Let get get started',
          'btn_Text' => 'Let’t talk!',
          'btn_Url' => 'https://google.com/',
      ),
      'history_data' => array(
        'start' => 'Start',
        'infinte' => 'Many More to go :)',
        'btn'=>'Get in Touch with Us',
        'btnUrl'=> 'https://google.com/',
      ),
      'vision_data' => array(
        'vision_details' => array(
          'heading' => 'Our vision to be deliver something unique, or something that worth and useful',
          'description'=> 'Our snerio is to work on the solutions of the problems. So we love to develop either its yours idea or its ours. We work with same dedication and quality. So we cannot say we can make your life easy but yes we can create someting together which can make ours life better.',
          'description2'=> 'Apart from that we are looking for partner agency who’s aim and vision is quit similar to us. We want do not want to earn the money only we want a life time relationship by delivery things as per expectation.',
          'alternate_text'=> 'So we are ready to grab the opportunity and ready to face the challenges no mater what is it, what it can be and what it will be',
        ),
        'vision_counter' => array(
          array(
            'value'=>'73',
            'heading'=>'Current Jobs',
          ), 
          array(
            'value'=>'50',
            'heading'=>'Team Size',
          ), 
          array(
            'value'=>'1000',
            'heading'=>'Total Jobs',
          ), 
          array(
            'value'=>'50000',
            'heading'=>'Total Hours Worked',
          ),  
        ),
        'checkout_Btn'=>'Checkout our Store',
        'checkout_BtnUrl'=>'https://google.com/',
        'portfolio_Btn'=>'Portfolio',
        'portfolio_BtnUrl'=>'https://google.com/',
      ),
      'team_data' => array(
        'heading' => 'Looking Experts for Support only?<br />Already have design?',
        'description' => 'If you already have design and need HTML / and Integration work we can assist you with that as well.',
        'heading2' => 'We charge for the support / assistense work @ $10-15 p/h.',
        'hireBtn' => 'Hire Experts For Assistanse',
        'hireBtnUrl' => 'https://google.com/',
        'teamBtn' => 'All team members',
        'teamBtnUrl' => 'https://google.com/',
        'moreBtn' => 'Show More',
      ),
      'technologies_data' => array(
       
        'tech_content' =>array(
          'heading' => 'Technologis we are working with',
          'text' => 'We are passnate about new learning so we are not just single technologes based. We believe to keep our skils up to date and we welome our clients choice of technologies.',
          'subheading' => 'Looking for something else?',
          'btnText' => 'Let Us Know!',
          'btnUrl' => 'https://google.com/',
        ),
        'tech_alternate' =>array(
          'heading' => 'Have an idea? We are here to discuss, we are excited to get started together.',
          'btnText' => 'Share your requirement',
          'btnUrl' => 'https://google.com/',
          'getbtnText' => 'Get in Touch!',
          'getbtnUrl' => 'https://google.com/',
        )
      ),
    
    );

    $data['testimonial_data'] = TestimonialResource::collection(Testimonial::all());
    $data['technologies_data']['tech_images'] = TechnologyResource::collection(Technology::all());
    $data['team_data']['team_member']=TeamResource::collection(Team::all());
    $data['history_data']['history_slider']=TimelineResource::collection(Timeline::orderBy('year', 'ASC')->get());
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
