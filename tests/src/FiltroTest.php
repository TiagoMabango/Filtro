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
        $expected_value = "";
        $filtered_email = Filtro::filterEmail($email);

        $this->assertEquals($expected_value, $filtered_email);
    }

    /**
     * Test if special chars is really been filtered.
     * 
     * @test
     */
    public function filterSpecialChars()
    {
        $data = [
            "nome"   => "TiagoMabango<script>alert('77777')</script>",
            "morada" => "São Pedro da Barra",
            "email"  => "tsss@ksda.com",
            "url"    => "https://free.facebook.com/home.php?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fprofile_timeline.php&refid=17&ref=page_creation_announcement",
            "ip"     => "102.182.1.1"
        ];
        $expected_value = "";
        $filtered_data = Filtro::filterSpecialChars($data);

        $this->assertEquals($expected_value, $filtered_data);
    }

    /**
     * Test if tags is really been filtered.
     * 
     * @test
     */
    public function filterStripTags()
    {
        $data = "TiagoMabango<script>alert('77777')</script>";
        $expected_value = "";
        $filtered_data = Filtro::filterStripTags($data);

        $this->assertEquals($expected_value, $filtered_data);
    }

    /**
     * Test if url is really been filtered.
     * 
     * @test
     */
    public function filterUrl()
    {
        $data = "https://free.facebook.com/home.php?ref_component=mfreebasic_home_header&ref_page=%2Fwap%2Fprofile_timeline.php&refid=17&ref=page_creation_announcement";
        $expected_value = "";
        $filtered_data = Filtro::filterUrl($data);

        $this->assertEquals($expected_value, $filtered_data);
    }

    /**
     * Test if ip is really been filtered.
     * 
     * @test
     */
    public function filterIp()
    {
        $data = "102.182.1.1";
        $expected_value = "";
        $filtered_data = Filtro::filterIp($data);

        $this->assertEquals($expected_value, $filtered_data);
    }
}