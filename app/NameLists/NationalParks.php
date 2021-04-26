<?php


namespace App\NameLists;


class NationalParks
{
    public static function generate() {

        $list = array(
            "Acadia",
            "Arches",
            "Badlands",
            "Big Bend",
            "Biscayne",
            "Black Canyon of the Gunnison",
            "Bryce Canyon",
            "Canyonlands",
            "Capitol Reef",
            "Carlsbad Caverns",
            "Channel Islands",
            "Congaree",
            "Crater Lake",
            "Cuyahoga Valley",
            "Death Valley",
            "Denali",
            "Dry Tortugas",
            "Everglades",
            "Gates of the Arctic",
            "Gateway Arch",
            "Glacier Bay",
            "Glacier",
            "Grand Canyon",
            "Grand Teton",
            "Great Basin",
            "Great Sand Dunes",
            "Great Smoky Mountains",
            "Guadalupe Mountains",
            "Haleakalā",
            "Hawaiʻi Volcanoes",
            "Hot Springs",
            "Indiana Dunes",
            "Isle Royale",
            "Joshua Tree",
            "Katmai",
            "Kenai Fjords",
            "Kings Canyon",
            "Kobuk Valley",
            "Lake Clark",
            "Lassen Volcanic",
            "Mammoth Cave",
            "Mesa Verde",
            "Mount Rainier",
            "National Park of American Samoa",
            "New River Gorge",
            "North Cascades",
            "Olympic",
            "Petrified Forest",
            "Pinnacles",
            "Redwood",
            "Rocky Mountain",
            "Saguaro",
            "Sequoia",
            "Shenandoah",
            "Theodore Roosevelt",
            "Virgin Islands",
            "Voyageurs",
            "White Sands",
            "Wind Cave",
            "Wrangell – St. Elias",
            "Yellowstone",
            "Yosemite",
            "Zion",
        );

        $count = count($list) - 1;

        $k = rand(0,$count);

        return $list[$k];
    }
}
