<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $accordions = [
            [
                'title' => 'Cumbria & Lancashire Children\'s Palliative Care Network',
                'body' => 'Contact Lynn Grayson, network chair.',
            ],
            [
                'title' => 'East of England Children\'s Palliative Care Network',
                'body' => 'This network covers Bedfordshire, Cambridgeshire, Essex, Hertfordshire, Luton, Norfolk and Suffolk. Membership is by invitation but membership of the local groups is open to interested practitioners working in the local area. For more details contact: Sonya O’Leary, network chair.',
            ],
            [
                'title' => 'The East Midlands Children\'s and Young People\'s Palliative Care Network',
                'body' => 'The East Midlands network covers Nottinghamshire, Derbyshire, Leicestershire and most of Lincolnshire and membership is open to any interested practitioners working in the local area. The network formed in 2004 and has grown and flourished since then and is now a well-supported, active network bringing together representatives from a wide variety of palliative care services from different sectors across the region. The network meets quarterly and helps to: Share clinical initiatives. Develop joint research and guidelines to influence future practice and discuss specific clinical issues relating to care. Facilitate the involvement and dialogue between providers and commissioners and feed into national networks relating to children\'s palliative care. Influence commissioning of children and young people\'s palliative care across the East Midlands area. Encourage the use of Together for Short Lives’ integrated care pathways to ensure equity of provision across the region. For more details contact: Dr Toni Wolff, network chair.',
            ],
            [
                'title' => 'The London Children\'s Palliative Care Network',
                'body' => 'The London Children’s Palliative Care Network (LCPCN) was established in June 2007, following the Department of Health’s Independent Review of Children’s Palliative Care. Membership of this network is open to interested practitioners working London. The network aims to expand its membership to include leads for workforce development, research and education. LCPCN aims to ensure a more integrated approach to children’s palliative care, involving multi-disciplinary agencies from both the statutory and voluntary sectors, including social care, education and children’s hospice services. For more details contact: Amy Volans, network chair.',
            ],
            [
                'title' => 'North East England and North Cumbria Children and Young People\'s Collaborative',
                'body' => 'Membership of this collaborative is by invitation at present and meets every two to three months. Meetings happen virtually. For more details contact: Helen Aspey and Suzanne Garbarino-Danson, network contact.',
            ],
            [
                'title' => 'Northern Ireland Children\'s Palliative Care Network',
                'body' => 'Contact James Devlin, and David Graham, network chairs.',
            ],
            [
                'title' => 'The Northwest Regional Children and Young People’s Palliative Care Network',
                'body' => 'The Northwest Regional Children and Young People’s Palliative Care Network brings together Children and Young People’s Palliative Care Zonal Networks from Greater Manchester and Cumbria and Lancashire, plus Merseyside and Cheshire, to represent the needs of children and young people across the entire Northwest region. The main focus of the work is children and young people from 0 to 19 years and includes both oncology and non-oncology diagnoses. However, the scope of its work also includes antenatal diagnosis and young people aged 19 and over in transition to adult services. The network has its own website at www.childrenspalliativenw.org.uk or you can get in touch by contacting the network chair, Vanessa Holme.',
            ],
            [
                'title' => 'The Scottish Children’s and Young People’s Palliative Care Network',
                'body' => 'The Scottish Children’s and Young People’s Palliative Care Network is open to any interested practitioners working in Scotland (such as Children Community Nurses, Commissioners of Children’s Services, Education workers, Paediatric Consultants with special interest in palliative care, those working with children and young people with complex needs or disabilities), and meets quarterly at locations throughout the country. The network is a national multi-agency group established to work together to ensure that palliative care for children and young people and their families is delivered in a seamless and integrated way across Scotland. The network believes that every child or young person in Scotland with a life-limiting condition, regardless of race, religion, age or where they live, should have access to the sustainable, holistic, family-centred and high-quality palliative care and support that they need. Its vision is that parents should receive: Choice of place of care – home, hospital, or hospice. Choice of place of death – home, hospice or hospital. Choice in bereavement care and support. For more details contact: Danielle Harley, administrator or Sarah Coy, Clare Smillie, network co-chairs.',
            ],
            [
                'title' => 'Thames Valley Children\'s Palliative Care Network',
                'body' => 'The Thames Valley Children’s Palliative Care Network network covers the Thames Valley Area, Oxfordshire, Buckinghamshire, Berkshire, and Wiltshire and meets quarterly. Membership is open to any interested practitioners working in the local area. For more details contact: Sue Lakie, administrator, Becky Davis, network chair.',
            ],
            [
                'title' => 'Wessex Children and Young Adults Palliative Care Network',
                'body' => 'The Wessex Children’s Palliative Care Network network meets quarterly and membership is open to any interested practitioners working in the local area. This network covers Southampton Hampshire, Isle of Wight and Portsmouth and is currently exploring links with colleagues in the Channel Islands. For more details contact: Dr Timothy Warlow, Clinical Lead and Chair.',
            ],
            [
                'title' => 'The Kent &amp; Medway Children and Young People\'s Paediatric Palliative Care Network',
                'body' => 'This network meets quarterly and membership is open to any interested practitioners working in the local area. For more details contact: Thomas Beaumont and Naz Chauhan, lead commissioners.',
            ],
            [
                'title' => 'The South West Children’s Palliative Care Commissioner’s and Practitioner’s Networks',
                'body' => 'The Children’s Palliative Care Network for the South West has been established to promote equity and to enhance the quality of the experience for children and young people requiring palliative care and their families, and to empower and support anyone working in the field of children’s palliative care in the South West of England. The network aims to share and disseminate best practice, develop the evidence base for children and young people’s palliative care through supporting research and disseminating research outcomes, promote effective communication and collaboration between the agencies and professionals providing children and young people’s palliative care in all settings, advocate on behalf of children and young people requiring palliative care and their families, ensuring user’s views are listened to, raise awareness of children and young people’s palliative care, strategically and politically, at all levels, develop supportive networks among colleagues working within children and young people’s palliative care services, support providers of children and young people’s palliative care to deliver recommended models of care and to minimize disparity across the region, quantify the level of need for palliative care for children and young people across the South West. For more details contact: Emma Heckford, Lisa Pullen, network contacts.',
            ],
            [
                'title' => 'The West Midlands Children and Young People’s Paediatric Palliative Care Network',
                'body' => 'This network meets quarterly and covers Birmingham and the Black Country, Shropshire, Staffordshire, Warwickshire, Herefordshire and Worcestershire. Membership is open to any interested practitioners working in the local area. The predecessor to this group was hosted by the Pan Birmingham Palliative Care Network and was tasked by the West Midlands Paediatric Oncology Supra Network Group to produce a model and recommendations for paediatric palliative care across the West Midlands. This work, based on a regional gap analysis, has now been completed, and the focus of the group has changed to strategic implementation of the objectives set out in the Department of Health’s ‘Better Care: Better Lives’ publication, in order to address gaps identified in the analysis. The objectives of the group are to: ... (continued)'
            ],
            [
                'title' => 'All Wales Managed Clinical Network',
                'body' => 'The Network provides an all Wales tertiary service, as well as local secondary support in the care of children with any life-shortening condition, malignant or otherwise. It is administratively based at the Children’s Hospital in Cardiff, but individual members of the Network have their base in each of the Health Boards of the Principality, as well as the children’s hospices that serve Wales. Its core members are the doctors, nurses and therapists delivering clinical care and other professionals are co-opted as is appropriate. The aim of the Network is to support children and their families with life-shortening conditions ... (continued)'
            ],
            [
                'title' => 'Greater Manchester Zonal of NW',
                'body' => 'Contact Anna Oddy, and Lydia Bowen, network chairs.'
            ],
            [
                'title' => 'Cheshire and Merseyside Zonal of NW',
                'body' => 'Contact Jan Sutherland Oakes, network chair.'
            ],
            [
                'title' => 'The South West London and Surrey Paediatric Palliative Care Network',
                'body' => 'The Surrey and South West London paediatric palliative care network (SPAN) is a clinical network which seeks to support and provide the delivery of collaborative, equitable, high quality palliative and end of life care services for CYP across the region through supporting service providers and commissioners. The network will support the delivery of best practice by suitably trained staff whom are able to address their emotional, psychological, medical, social and practical needs of patients and families and meet the relevant quality standards.'
            ]
        ];

        foreach ($accordions as $accordion) {
            \App\Models\Faq::create($accordion);
        }

    }


}
