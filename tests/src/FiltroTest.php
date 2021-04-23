<?php

namespace Tests\Filtro;

use Filtro\Filtro;

use PHPUnit\Framework\TestCase as PHPUnit;

final class FiltroTest extends PHPUnit
{
    /**
     * Test if email is really been filtered.
     * 
     * @test
     */
    public function filterEmail()
    {
        $email = "tsss@ksda.com";

        $filtered_email = Filtro::filterEmail($email);

        $this->assertEquals($email, $filtered_email);
    }

    /**
     * Test if special chars is really been filtered.
     * 
     * @test
     */
    public function filterSpecialChars()
    {
        $data = "São Pedro da Barra";

        $filtered_data = Filtro::filterSpecialChars($data);

        $this->assertEquals($data, $filtered_data);
    }

    /**
     * Test if tags is really been filtered.
     * 
     * @test
     */
    public function filterStripTags()
    {
        $data = "TiagoMabango<script>alert('77777')</script>";

        $filtered_data = Filtro::filterStripTags($data);

        $this->assertEquals($data, $filtered_data);
    }

    /**
     * Test if url is really been filtered.
     * 
     * @test
     */
    public function filterUrl()
    {
        $data = "https://free.facebook.com/home.php?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fprofile_timeline.php&refid=17&ref=page_creation_announcement";

        $filtered_data = Filtro::filterUrl($data);

        $this->assertEquals($data, $filtered_data);
    }

    /**
     * Test if ip is really been filtered.
     * 
     * @test
     */
    public function filterIp()
    {
        $data = "102.182.1.1";

        $filtered_data = Filtro::filterIp($data);

        $this->assertEquals($data, $filtered_data);
    }
}