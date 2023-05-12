<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmailCampainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('email_campaigns')->insertOrIgnore([

            [
                "title" => "Margaret from Intertrade",
                "subject" => " Introducing Intertrade Ltd: Your One-Stop Shop for Solar Power and Cold Chain Solutions",
                "emailBody" => "<p></p>

                <p>We are excited to introduce you to Intertrade Ltd, a leading provider of solar power and cold chain solutions in Nigeria. At Intertrade Ltd, we believe in providing our customers with reliable and sustainable energy solutions that are tailored to meet their needs.</p>

                <p>Our core services include sales of high-quality inverters, batteries, and solar panels that are built to withstand Nigeria&rsquo;s harsh climate. We also offer cold chain solutions such as ULT freezers and related products to help businesses keep their perishable goods fresh and safe.</p>

                <p>In addition to our product offerings, we also provide consulting services to help businesses and individuals make informed decisions about their energy and cold chain needs.</p>

                <p>We are proud to say that our products are available for sale and distribution all over Nigeria. We would love to hear from you and answer any questions you may have about our products and services.</p>

                <p>Thank you for your time and consideration.</p>

                <p>Best regards,</p>

                <p>Margaret Ojo</p>
                <p>Marketing </p>
                ",
                "order" => "1",

            ],

            [
                "title" => "Margaret from Intertrade",
                "subject" => "  Harness the Power of the Sun with Intertrade Ltd’s Solar Power Solutions",
                "emailBody" => "<p></p>

                <p>Did you know that solar power is one of the most reliable and sustainable sources of energy in Nigeria? With Intertrade Ltd&rsquo;s solar power solutions, you can harness the power of the sun to meet your energy needs while reducing your carbon footprint.</p>

                <p>Our range of high-quality inverters, batteries, and solar panels are designed to withstand Nigeria&rsquo;s harsh climate and provide you with reliable and affordable energy solutions. Whether you are a homeowner, a business owner, or a government agency, our solar power solutions are tailored to meet your unique energy needs.</p>

                <p>Our team of experts is also available to provide you with consulting services to help you make informed decisions about your solar power solutions.</p>

                <p>We are proud to say that our solar power solutions are available for sale and distribution all over Nigeria. Contact us today to learn more about how we can help you harness the power of the sun.</p>

                <p>Best regards,</p>

                <p>Margaret Ojo</p>
                <p>Marketing </p>
                ",
                "order" => "2",

            ],

            [
                "title" => "Margaret from Intertrade",
                "subject" => "Keep Your Perishable Goods Fresh and Safe with Intertrade Ltd’s Cold Chain Solutions",
                "emailBody" => "<p>Do you own a business that deals with perishable goods? Are you struggling to keep your products fresh and safe during transportation and storage? If so, Intertrade Ltd&rsquo;s cold chain solutions can help.</p>

                <p>Our range of ULT freezers and related products are designed to help businesses keep their perishable goods fresh and safe. Whether you are in the pharmaceutical, food, or agricultural industry, our cold chain solutions are tailored to meet your unique needs.</p>

                <p>Our team of experts is also available to provide you with consulting services to help you make informed decisions about your cold chain solutions.</p>

                <p>We are proud to say that our cold chain solutions are available for sale and distribution all over Nigeria. Contact us today to learn more about how we can help you keep your perishable goods fresh and safe.</p>

                <p>Best regards,</p>

                <p>Margaret Ojo</p>
                <p>Marketing </p>
                ",
                "order" => "3",

            ],

            [
                "title" => "Margaret from Intertrade",
                "subject" => "Intertrade Ltd: Your One-Stop Shop for Solar Power and Cold Chain Solutions",
                "emailBody" => "

                At Intertrade Ltd, we believe in providing our customers with comprehensive energy solutions that meet their needs. That’s why we offer a combination of solar power and cold chain solutions to help businesses and individuals meet their energy needs while keeping their perishable goods fresh and safe.

                Our range of high-quality inverters, batteries, and solar panels are designed to provide you with reliable and affordable energy solutions, while our ULT freezers and related products are designed to help businesses keep their perishable goods fresh and safe during transportation and storage.

                In addition to our product offerings, we also provide consulting services to help businesses and individuals make informed decisions about their energy and cold chain needs.

                We are proud to say that our products are available for sale and distribution all over Nigeria. Contact us today to learn more about how we can help you meet your energy and cold chain needs.

                Best regards,",
                "order" => "4",

            ],

            [
                "title" => "Margaret from Intertrade",
                "subject" => "Limited-Time Offer: Get 10% Off on All Solar Power and Cold Chain Solutions",
                "emailBody" => "

                At Intertrade Ltd, we are committed to providing our customers with reliable and sustainable energy solutions that meet their needs. To show our appreciation for your support, we are offering a limited-time offer of 10% off on all our solar power and cold chain solutions.

                Our range of high-quality inverters, batteries, and solar panels are designed to provide you with reliable and affordable energy solutions, while our ULT freezers and related products are designed to help businesses keep their perishable goods fresh and safe.

                In addition to our product offerings, we also provide consulting services to help businesses and individuals make informed decisions about their energy and cold chain needs.

                Don't miss this opportunity to save on our energy and cold chain solutions. Contact us today to learn more about how you can take advantage of this limited-time offer.

                Best regards,",
                "order" => "5",

            ],


        ]);



    }
}
