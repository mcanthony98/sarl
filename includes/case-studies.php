<?php
/**
 * Case studies for selected projects, keyed by the project's event_id.
 * project.php shows the case-study layout for any project listed here; every other
 * project keeps the standard gallery page. Images are file names in uploads/ (from
 * that project's gallery). Gallery images not placed in a section and not listed
 * under 'hide' (duplicate uploads) appear in the closing gallery.
 * The order of this list is the order case studies appear on the site.
 */

// URL slug helper (also declared in head-content.php; needed here before <head> is printed)
if (!function_exists('slagify')) {
    function slagify($input)
    {
        return str_replace(' ', '-', strtolower($input));
    }
}

// Friendly label for a project's category as stored in the database
if (!function_exists('sarl_category_label')) {
    function sarl_category_label($category)
    {
        $labels = [
            'interior fit-outs' => 'Interior Fitouts',
            'aluminium' => 'Aluminium & Glazing',
            'residential' => 'Residential',
        ];
        $key = strtolower(trim($category));
        return isset($labels[$key]) ? $labels[$key] : ucwords($category);
    }
}

$CASE_STUDIES = [
    71 => [
        'name' => 'Open Society Africa',
        'client' => 'Open Society Foundations',
        'sector' => 'Foundation offices',
        'services' => ['Interior fitout', 'Refurbishment', 'Joinery'],
        'hero' => '2026_05_08_19_53_30cover.jpg',
        'intro' => 'A refurbishment and interior fitout of the Open Society Africa offices: a timber-slatted reception, open collaboration areas, glazed focus booths, staff rest rooms with built-in bunks, and full-height joinery throughout.',
        'sections' => [
            [
                'title' => 'Open, warm collaboration space',
                'text' => 'An exposed black ceiling grid, suspended timber panels and woven pendant lights give the open areas warmth, with meeting tables and soft seating set out along the windows.',
                'layout' => 'mosaic',
                'images' => ['2026_05_08_19_38_08WhatsApp Image 2026-05-04 at 14.03.06 (1).jpeg', '2026_05_08_19_47_59WhatsApp Image 2026-05-04 at 14.03.04.jpeg', '2026_05_08_19_46_38WhatsApp Image 2026-05-04 at 14.03.06.jpeg'],
            ],
            [
                'title' => 'Glazed focus booths',
                'text' => 'Black-framed glass booths sit within the workspace for calls and focused work, keeping the floor open and full of light.',
                'layout' => 'feature',
                'images' => ['2026_05_08_19_47_59WhatsApp Image 2026-05-04 at 14.03.05.jpeg', '2026_05_08_19_35_56WhatsApp Image 2026-05-04 at 14.03.05.jpeg'],
            ],
            [
                'title' => 'Rest rooms with built-in bunks',
                'text' => 'Purpose-built rest rooms combine timber bunks, ladder-shelf joinery, cane screens and curtains: compact, calm and crafted to fit the space exactly.',
                'layout' => 'trio',
                'images' => ['2026_05_08_15_08_15WhatsApp Image 2026-05-04 at 14.03.00.jpeg', '2026_05_08_15_07_39WhatsApp Image 2026-05-04 at 14.03.01.jpeg', '2026_05_08_19_35_16WhatsApp Image 2026-05-04 at 14.03.02.jpeg'],
            ],
            [
                'title' => 'Joinery & storage',
                'text' => 'Full-height timber lockers with an upholstered bench, open display shelving and a kitchenette with lit floating shelves carry the same material palette through every room.',
                'layout' => 'mosaic',
                'images' => ['2026_05_08_19_50_37WhatsApp Image 2026-05-04 at 14.03.07 (1).jpeg', '2026_05_08_14_58_32WhatsApp Image 2026-05-04 at 14.03.02 (1).jpeg', '2026_05_08_19_46_38WhatsApp Image 2026-05-04 at 14.03.08 (2).jpeg'],
            ],
        ],
        'hide' => ['2026_05_08_19_35_56WhatsApp Image 2026-05-04 at 14.03.04.jpeg'],
    ],
    72 => [
        'name' => 'Private Residence (2026)',
        'client' => 'Private client',
        'sector' => 'Residential',
        'services' => ['Aluminium windows & doors', 'Glass balustrades', 'Glazing'],
        'hero' => '2026_06_09_11_36_11cover.jpg',
        'intro' => 'Aluminium and glazing works for a private residence: dark-framed windows and sliding doors set into stone walls, frameless glass balustrades around the pool, terraces and stairs, and a slatted canopy along the garden facade.',
        'sections' => [
            [
                'title' => 'The house',
                'text' => 'Large openings frame views of the garden and pool, with every window and door detailed in a slim, dark finish that ties the house together.',
                'layout' => 'pair',
                'images' => ['2026_06_09_11_38_27WhatsApp Image 2026-06-06 at 12.11.04 (1).jpeg', '2026_06_09_11_38_27WhatsApp Image 2026-06-06 at 12.11.04 (2).jpeg'],
            ],
            [
                'title' => 'Windows & sliding doors',
                'text' => 'Full-height sliding doors, top-hung windows and glazed doors sit neatly within the stone reveals, opening the living spaces up to the terraces.',
                'layout' => 'trio',
                'images' => ['2026_06_09_11_40_08WhatsApp Image 2026-06-06 at 12.11.03 (2).jpeg', '2026_06_09_11_40_43WhatsApp Image 2026-06-06 at 12.11.03 (1).jpeg', '2026_06_09_11_39_08WhatsApp Image 2026-06-06 at 12.11.01.jpeg'],
            ],
            [
                'title' => 'Frameless glass balustrades',
                'text' => 'Point-fixed frameless glass keeps the pool deck, terraces and stairs safe without interrupting the view.',
                'layout' => 'mosaic',
                'images' => ['2026_06_09_11_39_24WhatsApp Image 2026-06-06 at 12.11.02 (4).jpeg', '2026_06_09_11_42_36WhatsApp Image 2026-06-06 at 12.11.02 (3).jpeg', '2026_06_09_11_42_36WhatsApp Image 2026-06-06 at 12.11.04.jpeg'],
            ],
            [
                'title' => 'Stairs, canopies & interiors',
                'text' => 'Glass continues inside along the staircase and landing, while a slatted canopy shades the walkway along the garden side.',
                'layout' => 'trio',
                'images' => ['2026_06_09_11_40_08WhatsApp Image 2026-06-06 at 12.11.02.jpeg', '2026_06_09_11_42_36WhatsApp Image 2026-06-06 at 12.11.04 (3).jpeg', '2026_06_09_11_42_46WhatsApp Image 2026-06-06 at 12.11.02 (2).jpeg'],
            ],
        ],
        'hide' => [],
    ],
    73 => [
        'name' => 'Le Grenier à Pain',
        'client' => 'Le Grenier à Pain',
        'sector' => 'Hospitality & retail',
        'location' => '136 Riverside',
        'services' => ['Interior fitout', 'Joinery', 'Display counters'],
        'hero' => '2026_06_24_10_30_24WhatsApp Image 2026-06-22 at 10.58.05 (1).jpeg',
        'intro' => 'Interior fitout of Le Grenier à Pain\'s bakery at 136 Riverside: a long service counter with glass display cases, timber and black-steel bread shelving, textured stone-effect feature walls and a clean, hard-wearing back-of-house kitchen.',
        'sections' => [
            [
                'title' => 'Counter & display',
                'text' => 'Glass display cases run the length of the counter, backed by open timber-and-steel shelving that puts the bread on show under warm track lighting.',
                'layout' => 'mosaic',
                'images' => ['2026_06_24_10_28_26WhatsApp Image 2026-06-22 at 10.58.05.jpeg', '2026_06_24_10_28_54WhatsApp Image 2026-06-22 at 10.58.06 (3).jpeg', '2026_06_24_10_29_44WhatsApp Image 2026-06-22 at 10.58.06 (2).jpeg'],
            ],
            [
                'title' => 'Feature walls & joinery',
                'text' => 'Textured stone-effect walls and built-in timber joinery give the shop its warm, artisan character, with herringbone timber floors underfoot.',
                'layout' => 'feature',
                'images' => ['2026_06_24_10_30_24WhatsApp Image 2026-06-22 at 10.58.06 (4).jpeg'],
            ],
            [
                'title' => 'Back of house',
                'text' => 'Behind the counter, a bright working kitchen with stainless worktops and easy-clean finishes keeps production running smoothly.',
                'layout' => 'pair',
                'images' => ['2026_06_24_10_28_26WhatsApp Image 2026-06-22 at 10.58.06 (1).jpeg', '2026_06_24_10_29_57WhatsApp Image 2026-06-22 at 10.58.06.jpeg'],
            ],
        ],
        'hide' => ['2026_06_24_10_27_52cover.jpg'],
    ],
    74 => [
        'name' => 'Stanbic Bank Kenya',
        'client' => 'Stanbic Bank Kenya',
        'sector' => 'Banking & finance',
        'location' => 'Pushottam Place, 6th Floor',
        'services' => ['Interior fitout', 'Glass partitions', 'Joinery'],
        'hero' => '2026_08_27_10_11_18coverstnbn.jpg',
        'intro' => 'Interior fitout of Stanbic Bank\'s 6th-floor offices at Pushottam Place: a curved reception, a boardroom under acoustic ceiling baffles, open-plan workstations with planter dividers, glass partitions and colourful breakout spaces.',
        'sections' => [
            [
                'title' => 'Reception',
                'text' => 'A curved white reception desk sits against timber-clad walls and lit display shelving, with a soft lounge seat for visitors.',
                'layout' => 'feature',
                'images' => ['2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.48.jpeg'],
            ],
            [
                'title' => 'Boardroom',
                'text' => 'Long boardroom tables under suspended acoustic baffles, with a timber-slatted feature wall and built-in banquette seating.',
                'layout' => 'pair',
                'images' => ['2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.48 (1).jpeg', '2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.48 (2).jpeg'],
            ],
            [
                'title' => 'Open-plan workspace',
                'text' => 'Workstations are arranged in clusters, divided by built-in planters, with warm timber flooring and city views.',
                'layout' => 'mosaic',
                'images' => ['2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.49 (1).jpeg', '2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.49.jpeg', '2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.49 (2).jpeg'],
            ],
            [
                'title' => 'Breakout & partitions',
                'text' => 'A graphic feature wall and curved banquette create a relaxed breakout area, while frosted glass partitions keep rooms private but bright.',
                'layout' => 'trio',
                'images' => ['2026_08_27_10_11_49WhatsApp Image 2026-08-24 at 09.58.48 (4).jpeg', '2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.49 (3).jpeg', '2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.48 (3).jpeg'],
            ],
        ],
        'hide' => ['2026_08_27_10_13_21WhatsApp Image 2026-08-24 at 09.58.48 (4).jpeg'],
    ],
    67 => [
        'name' => 'Mastercard Foundation',
        'client' => 'Mastercard Foundation',
        'sector' => 'Foundation offices',
        'location' => 'The Promenade, 4th Floor, General Mathenge Road',
        'services' => ['Interior fitout', 'Glass partitions', 'Joinery', 'Feature ceilings'],
        'hero' => '2025_07_31_09_09_48WhatsApp Image 2025-07-30 at 16.15.31 (1).jpeg',
        'intro' => 'Interior fitout of the Mastercard Foundation offices on the 4th floor of The Promenade, General Mathenge Road: bold colour, arched booths, timber-slatted ceilings and glass-fronted meeting rooms.',
        'sections' => [
            [
                'title' => 'Reception & arrival',
                'text' => 'A sculpted white reception counter with backlit signage opens onto glazed corridors and arched red alcoves.',
                'layout' => 'pair',
                'images' => ['2025_07_31_09_08_44cover.jpg', '2025_07_31_09_09_48WhatsApp Image 2025-07-30 at 16.15.31 (2).jpeg'],
            ],
            [
                'title' => 'Boardrooms & meeting rooms',
                'text' => 'Timber-slatted ceilings with linear lighting run the length of the boardrooms, while patterned glass manifestations give the meeting rooms privacy.',
                'layout' => 'mosaic',
                'images' => ['2025_07_31_09_11_37WhatsApp Image 2025-07-30 at 16.15.30 (2).jpeg', '2025_07_31_09_11_37WhatsApp Image 2025-07-30 at 16.15.27.jpeg', '2025_07_31_09_12_50WhatsApp Image 2025-07-30 at 16.15.26.jpeg'],
            ],
            [
                'title' => 'Collaboration & breakout',
                'text' => 'Colourful ceiling panels, informal seating and work counters make the open areas lively places to meet and work.',
                'layout' => 'mosaic',
                'images' => ['2025_07_31_09_10_56WhatsApp Image 2025-07-30 at 16.15.26 (1).jpeg', '2025_07_31_09_12_03WhatsApp Image 2025-07-30 at 16.15.32.jpeg', '2025_07_31_09_10_31WhatsApp Image 2025-07-30 at 16.15.30.jpeg'],
            ],
            [
                'title' => 'Booths, pantry & washrooms',
                'text' => 'Upholstered arched booths, a timber pantry with integrated appliances and finished washrooms complete the floor.',
                'layout' => 'trio',
                'images' => ['2025_07_31_09_11_16WhatsApp Image 2025-07-30 at 16.15.28.jpeg', '2025_07_31_09_10_31WhatsApp Image 2025-07-30 at 16.15.30 (1).jpeg', '2025_07_31_09_11_16WhatsApp Image 2025-07-30 at 16.15.27 (1).jpeg'],
            ],
        ],
        'hide' => [],
    ],
    68 => [
        'name' => 'Private Residence (2025)',
        'client' => 'Private client',
        'sector' => 'Residential',
        'services' => ['Aluminium windows & doors', 'Glass balustrades', 'Glazing'],
        'hero' => '2025_05_09_17_15_57ret.jpg',
        'intro' => 'Aluminium and glazing works for a contemporary multi-level home: slim dark-grey frames, large sliding doors onto the terraces, ribbon windows and frameless glass balustrades.',
        'sections' => [
            [
                'title' => 'The facade',
                'text' => 'Dark aluminium frames sit crisply against the stone and timber cladding, with glazing wrapping the corners of the house.',
                'layout' => 'trio',
                'images' => ['2025_05_09_16_34_20WhatsApp Image 2025-05-09 at 16.08.05.jpeg', '2025_05_09_16_34_20WhatsApp Image 2025-05-09 at 16.08.06 (2).jpeg', '2025_05_09_16_34_20WhatsApp Image 2025-05-09 at 16.08.07 (1).jpeg'],
            ],
            [
                'title' => 'Sliding doors to the terraces',
                'text' => 'Floor-to-ceiling sliding doors open the living spaces straight onto the terraces on every level.',
                'layout' => 'mosaic',
                'images' => ['2025_05_09_16_34_20WhatsApp Image 2025-05-09 at 16.08.10 (3).jpeg', '2025_05_09_17_02_24WhatsApp Image 2025-05-09 at 16.08.06 (1).jpeg', '2025_05_09_17_02_24WhatsApp Image 2025-05-09 at 16.08.06.jpeg'],
            ],
            [
                'title' => 'Windows & balustrades',
                'text' => 'A long ribbon window frames the garden from the kitchen, and frameless glass balustrades keep the balconies open to the view.',
                'layout' => 'mosaic',
                'images' => ['2025_05_09_16_34_20WhatsApp Image 2025-05-09 at 16.08.07.jpeg', '2025_05_09_17_02_24WhatsApp Image 2025-05-09 at 16.08.07 (2).jpeg', '2025_05_09_17_02_24WhatsApp Image 2025-05-09 at 16.08.08 (1).jpeg'],
            ],
        ],
        'hide' => ['2025_05_09_16_34_20WhatsApp Image 2025-05-09 at 16.08.05 (1).jpeg', '2025_05_09_16_54_46WhatsApp Image 2025-05-09 at 16.08.07.jpeg'],
    ],
    69 => [
        'name' => 'Workable LLP – 9th Floor',
        'client' => 'Workable LLP',
        'sector' => 'Corporate offices',
        'location' => '9th Floor',
        'services' => ['Interior fitout', 'Joinery', 'Feature ceilings'],
        'hero' => '2025_06_19_08_40_26bggg.jpg',
        'intro' => 'Interior fitout of Workable LLP\'s 9th-floor workspace: a vibrant reception, open-plan desking under sculpted ceiling clouds, glass-walled meeting rooms, a colourful pantry and a café-style breakout area.',
        'sections' => [
            [
                'title' => 'Reception',
                'text' => 'Timber-lined walls, a pale reception desk and bright accent furniture make a confident first impression.',
                'layout' => 'mosaic',
                'images' => ['2025_06_19_08_45_23WhatsApp Image 2025-06-18 at 10.53.37.jpeg', '2025_06_19_08_50_10WhatsApp Image 2025-06-18 at 10.53.42.jpeg', '2025_06_19_08_45_23WhatsApp Image 2025-06-18 at 10.53.39.jpeg'],
            ],
            [
                'title' => 'Workspace',
                'text' => 'Rows of workstations sit beneath wave-shaped ceiling clouds, with daylight from full-height windows.',
                'layout' => 'pair',
                'images' => ['2025_06_19_08_48_47WhatsApp Image 2025-06-18 at 10.53.40 (1).jpeg', '2025_06_19_08_48_47WhatsApp Image 2025-06-18 at 10.53.40.jpeg'],
            ],
            [
                'title' => 'Meeting rooms',
                'text' => 'From a timber-panelled boardroom with a sweeping light ring to smaller glass-fronted rooms, every meeting space has its own character.',
                'layout' => 'trio',
                'images' => ['2025_06_19_08_46_22WhatsApp Image 2025-06-18 at 10.53.43.jpeg', '2025_06_19_08_46_22WhatsApp Image 2025-06-18 at 10.53.43 (1).jpeg', '2025_06_19_08_47_24WhatsApp Image 2025-06-18 at 10.53.40 (2).jpeg'],
            ],
            [
                'title' => 'Pantry & breakout',
                'text' => 'A green-and-orange pantry with subway tiling, timber-slatted ceilings and lit shelving turns the breakout area into the heart of the office.',
                'layout' => 'mosaic',
                'images' => ['2025_06_19_08_46_48WhatsApp Image 2025-06-18 at 10.53.44 (1).jpeg', '2025_07_31_09_29_06WhatsApp Image 2025-06-18 at 10.53.42 (1).jpeg', '2025_06_19_08_50_10WhatsApp Image 2025-06-18 at 10.53.40 (3).jpeg'],
            ],
        ],
        'hide' => ['2025_06_19_08_49_14WhatsApp Image 2025-06-18 at 10.53.37.jpeg'],
    ],
    65 => [
        'name' => 'BYD Car Showroom',
        'client' => 'BYD',
        'sector' => 'Automotive retail',
        'location' => 'Uhuru Highway',
        'services' => ['Interior fitout', 'Wall cladding', 'Reception joinery'],
        'hero' => '2025_01_29_17_20_33WhatsApp Image 2025-01-27 at 15.39.27.jpeg',
        'intro' => 'Interior fitout of the BYD car showroom on Uhuru Highway: warm timber-effect wall cladding, a branded reception desk, a customer lounge and an open display floor for the vehicles.',
        'sections' => [
            [
                'title' => 'Reception',
                'text' => 'A curved branded reception desk set against full-width timber-effect cladding welcomes customers into the showroom.',
                'layout' => 'feature',
                'images' => ['2025_01_29_18_03_581.jpg'],
            ],
            [
                'title' => 'Showroom floor',
                'text' => 'A clear, open floor lets the vehicles take centre stage, with the cladding carried along the walls.',
                'layout' => 'mosaic',
                'images' => ['2025_01_29_17_20_33WhatsApp Image 2025-01-27 at 15.39.25 (1).jpeg', '2025_01_29_17_21_08WhatsApp Image 2025-01-27 at 15.39.26 (2).jpeg', '2025_01_29_17_21_08WhatsApp Image 2025-01-27 at 15.39.24 (2).jpeg'],
            ],
            [
                'title' => 'Lounge & details',
                'text' => 'A customer lounge sits behind a slatted timber screen, and recessed display niches are set into the cladding.',
                'layout' => 'mosaic',
                'images' => ['2025_01_29_17_20_33WhatsApp Image 2025-01-27 at 15.39.23 (3).jpeg', '2025_01_29_17_21_08WhatsApp Image 2025-01-27 at 15.39.23 (2).jpeg', '2025_01_29_17_21_08WhatsApp Image 2025-01-27 at 15.39.24.jpeg'],
            ],
        ],
        'hide' => [],
    ],
    66 => [
        'name' => 'CFAO Motors (K) Ltd',
        'client' => 'CFAO Motors (K) Ltd',
        'sector' => 'Automotive',
        'location' => 'Lusaka Building',
        'services' => ['Facade facelift', 'Aluminium cladding', 'Glazing'],
        'hero' => '2025_01_29_17_35_22WhatsApp Image 2025-01-27 at 15.39.45.jpeg',
        'intro' => 'Facelift of the facade of CFAO Motors\' headquarters building: new aluminium cladding and glazing that give the building a clean, modern face.',
        'sections' => [
            [
                'title' => 'The new facade',
                'text' => 'Bands of aluminium cladding and continuous glazing now run across every floor.',
                'layout' => 'pair',
                'images' => ['2025_01_29_17_35_22WhatsApp Image 2025-01-27 at 15.39.46 (1).jpeg', '2025_01_29_17_35_22WhatsApp Image 2025-01-27 at 15.39.45 (1).jpeg'],
            ],
            [
                'title' => 'Details',
                'text' => 'The cladding wraps the corners and the stair core, giving the building one consistent finish.',
                'layout' => 'mosaic',
                'images' => ['2025_01_29_17_35_22WhatsApp Image 2025-01-27 at 15.39.47.jpeg', '2025_01_29_17_35_22WhatsApp Image 2025-01-27 at 15.39.47 (1).jpeg', '2025_01_29_17_35_22WhatsApp Image 2025-01-27 at 15.39.46 (2).jpeg'],
            ],
            [
                'title' => 'In context',
                'text' => 'The refreshed building alongside the CFAO Mobility site.',
                'layout' => 'pair',
                'images' => ['2025_03_10_09_25_4659789827-dc3a-480a-8412-f5b0175d817b.jpeg', '2025_03_10_09_25_46243c72fd-1a78-41fb-9780-38392df3c3ca.jpeg'],
            ],
        ],
        'hide' => ['2025_03_10_09_23_5859789827-dc3a-480a-8412-f5b0175d817b.jpeg'],
    ],
    2 => [
        'name' => 'Rockefeller Office Fitout',
        'client' => 'Rockefeller',
        'sector' => 'Offices',
        'location' => 'Sanlam Towers',
        'services' => ['High-end office fitout', 'Joinery', 'Feature ceilings'],
        'hero' => '2024_11_25_07_24_51300115824_478421840960508_7935905948617244602_n.jpg',
        'intro' => 'A high-end office fitout at Sanlam Towers: a sculpted reception, timber feature ceilings, colourful pantry walls, open workstations and a glazed terrace lounge.',
        'sections' => [
            [
                'title' => 'Reception & arrival',
                'text' => 'A curved reception counter, timber-slatted ceilings and lit timber display joinery set the tone from the moment visitors arrive.',
                'layout' => 'mosaic',
                'images' => ['2024_09_19_11_10_05300007386_478404084295617_8539948165159124533_n.jpg', '2024_11_25_07_24_51300073170_478424244293601_2962847529065030875_n.jpg', '2024_11_25_07_24_51300227259_478420797627279_1345148146936374606_n.jpg'],
            ],
            [
                'title' => 'Workspace',
                'text' => 'Open workstations line the windows, with planters and storage units used to divide the floor.',
                'layout' => 'mosaic',
                'images' => ['2024_11_25_07_24_51300179315_478422267627132_5408034698981595920_n.jpg', '2024_11_25_07_24_51300160056_478422714293754_6972307827374782475_n.jpg', '2024_11_25_07_24_51300093103_478420454293980_8340628623712571321_n.jpg'],
            ],
            [
                'title' => 'Meeting & collaboration',
                'text' => 'Meeting rooms with a brick feature wall, a timber lattice ceiling and informal seating areas give teams a choice of places to work.',
                'layout' => 'trio',
                'images' => ['2024_11_25_07_24_51300111841_478421574293868_2448983270473898060_n.jpg', '2024_11_25_07_24_51300221106_478421360960556_2262203666414414390_n.jpg', '2024_11_25_07_24_51300359520_478420877627271_7888300313585550508_n.jpg'],
            ],
            [
                'title' => 'Pantry & terrace',
                'text' => 'A pantry with a bold patterned wall and teal joinery, and a glazed terrace lounge with outdoor-style seating.',
                'layout' => 'mosaic',
                'images' => ['2024_11_25_07_24_51300241029_478420404293985_5109003149923021496_n.jpg', '2024_11_25_07_24_51300210735_478421030960589_7920511452054814323_n.jpg', '2024_11_25_07_24_51300134171_478420770960615_3836206073782850886_n.jpg'],
            ],
        ],
        'hide' => [],
    ],
    10 => [
        'name' => 'Standard Chartered Bank Kenya',
        'client' => 'Standard Chartered Bank Kenya',
        'sector' => 'Banking & finance',
        'location' => 'Chiromo Head Office',
        'services' => ['Office restack', 'Interior fitout', 'Joinery'],
        'hero' => '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.11.jpeg',
        'intro' => 'An office restack at Standard Chartered Bank\'s Chiromo head office: a timber-clad reception, reworked open-plan floors, café and breakout zones, training space and colour-coded collaboration areas.',
        'sections' => [
            [
                'title' => 'Reception',
                'text' => 'A timber-panelled feature wall with the illuminated bank emblem and a long white counter greet visitors.',
                'layout' => 'pair',
                'images' => ['2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.12 (4).jpeg', '2024_11_25_16_35_34WhatsApp Image 2024-11-19 at 11.08.12 (3).jpeg'],
            ],
            [
                'title' => 'Open-plan floors',
                'text' => 'Workstations, storage and meeting pods arranged across bright open floors, with zoned carpet and suspended ceiling features.',
                'layout' => 'mosaic',
                'images' => ['2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (13).jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (23).jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (8).jpeg'],
            ],
            [
                'title' => 'Breakout & collaboration',
                'text' => 'Decorative metal screens, timber bases and upholstered banquettes create informal places to meet.',
                'layout' => 'mosaic',
                'images' => ['2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.13 (4).jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.13.jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (6).jpeg'],
            ],
            [
                'title' => 'Colour-coded zones',
                'text' => 'Green and blue zones with booth seating and graphic glass partitions help people find their way around.',
                'layout' => 'trio',
                'images' => ['2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (22).jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (26).jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (24).jpeg'],
            ],
            [
                'title' => 'Training & support spaces',
                'text' => 'A training room with a timber feature wall, a kitchenette and display joinery for awards.',
                'layout' => 'trio',
                'images' => ['2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (20).jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.13 (2).jpeg', '2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (7).jpeg'],
            ],
        ],
        'hide' => ['2024_11_26_16_04_59WhatsApp Image 2024-11-19 at 11.08.15 (17).jpeg'],
    ],
    3 => [
        'name' => 'The Address, Waiyaki Way',
        'client' => 'The Address',
        'sector' => 'Commercial building',
        'location' => 'Waiyaki Way',
        'services' => ['Aluminium works', 'Glazing'],
        'hero' => '2025_09_04_10_44_00WhatsApp Image 2025-09-02 at 08.48.12.jpeg',
        'intro' => 'Aluminium and glazing works to The Address on Waiyaki Way: the glazed facades of the tower and the glass-lined ground-floor lobby.',
        'sections' => [
            [
                'title' => 'The tower',
                'text' => 'Glazing wraps the tower from the entrance canopy to the upper floors, standing out on the Waiyaki Way skyline.',
                'layout' => 'trio',
                'images' => ['2025_09_04_11_00_17cov.jpg', '2025_09_04_10_44_00WhatsApp Image 2025-09-02 at 08.48.11.jpeg', '2025_09_04_10_59_28WhatsApp Image 2025-09-02 at 08.48.12 (1).jpeg'],
            ],
            [
                'title' => 'Lobby',
                'text' => 'Inside, glass screens and partitions line the ground-floor lobby.',
                'layout' => 'wide',
                'images' => ['2025_09_04_10_44_00WhatsApp Image 2025-09-02 at 08.48.11 (2).jpeg'],
            ],
        ],
        'hide' => ['2025_09_04_10_39_11cov.jpg'],
    ],
];
