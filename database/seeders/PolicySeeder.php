<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class PolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $policies = [
            [
                'title' => 'Children’s hospice funding in England',
                'body' => 'Children’s hospices across England provide vital care and support to children and young people and their costs are rising rapidly. Yet NHS England (NHSE) plans to end the crucial £25 million annual Children’s Hospice Grant at the end of this year (2023/24). Our new research...',
            ],
            [
                'title' => 'Children’s palliative care maps',
                'body' => 'Our new interactive maps show where seriously ill children and their families in England can access palliative care which meets National Institute for Health and Care Excellence (NICE) quality standards. We have created them from information provided by children\'s palliative care networks and the results...',
            ],
            [
                'title' => 'Access to 24/7 children’s palliative care',
                'body' => 'The UK Government and NHS England have published a number of clear policies which provide an imperative for providing palliative care to seriously ill children and their families. However, our research has found a postcode lottery across England with some families of seriously ill children...',
            ],
            [
                'title' => 'NHS commissioning of children’s palliative care in 2021: CCG responses to freedom of information requests',
                'body' => 'The APPG for Children Who Need Palliative Care and Together for Short Lives issued freedom of information requests to NHS clinical commissioning groups (CCGs) in England in February 2021. These requests aimed to understand the extent to which key elements of children’s palliative care are...',
            ],
            [
                'title' => 'A more sustainable approach to statutory funding in England',
                'body' => 'Families of children with life-limiting conditions rely on the palliative care provided by the voluntary sector, including children\'s hospices. Despite their amazing work - and the pressure they take off the NHS - these lifeline services do not receive enough money from the state. The...',
            ],
            [
                'title' => 'Ensuring a sustainable children’s palliative care workforce',
                'body' => 'There are too few professionals with the skills and experience needed to provide children’s palliative care in hospitals, children’s hospices and in the community. Together for Short Lives has found that: There are too few community children’s nurses (CCNs) employed by the NHS: CCNs provide...',
            ],
            [
                'title' => 'The cost of living crisis for families of seriously ill children',
                'body' => 'We have joined with other charities including Contact and Sense in calling on the UK Government to help families with disabled children with their extra energy costs and soaring household bills as a result of the cost of living crisis. Even before recent price rises,...',
            ],
            [
                'title' => 'All-Party Parliamentary Group for Children Who Need Palliative Care',
                'body' => 'Download the APPG\'s inquiry report, published on 21 October 2018, here. Together for Short Lives is the Secretariat for the All-Party Parliamentary Group (APPG) for Children Who Need Palliative Care within the UK Parliament. The APPG is a cross-party group of MPs and peers which...',
            ],
            [
                'title' => 'Affordable and accessible childcare',
                'body' => 'Access to high-quality, affordable and accessible childcare is important for the educational and social development of seriously ill and disabled children. Through effective childcare, disabled children with complex needs will see progress in both their physical and mental well-being. However, there is general recognition that...',
            ],
            [
                'title' => 'Preventing family breakdown through short breaks for respite',
                'body' => 'Children with life-limiting conditions – and their families – rely on frequent short breaks for respite. The pressure on parents of having a child with a life-limiting condition is immense, so social care is vitally important to relieve this stress, spend time as a family...',
            ],
            [
                'title' => 'SEND and joining up education, health and care for seriously ill children',
                'body' => 'Single, joined-up education, health and care (EHC) assessments, plans and personal budgets for children and young people up to the age of 25 are only available to children and young people in England who have a special educational need (SEN). Together for Short Lives has...',
            ],
            [
                'title' => 'Giving mobility benefits to babies and children under the age of three',
                'body' => 'Together for Short Lives would like all children under three years old who must always be accompanied by bulky medical equipment and/or need to be near a motor vehicle in case they require treatment for their condition to have access to a specialist vehicle or...',
            ],
            [
                'title' => 'Giving bereaved parents paid time away from work if their child dies',
                'body' => 'Together for Short Lives welcomes the Parental Bereavement (Leave and Pay) Act 2018 and believes that it will introduce an important period of paid leave for parents to help them come to terms with the unbearable experience of losing a child. We thank Kevin Hollinrake...',
            ],
            [
                'title' => 'Reducing the financial cost to families when a child dies',
                'body' => 'The prospect of losing a child is a parent’s worst nightmare. Tragically, for the parents and carers of 5,000 babies, children and young people who die in the UK every year, this nightmare becomes a reality. When the worst happens, parents forced to come to...',
            ],
            [
                'title' => 'Preventing the transition cliff-edge and securing the right care for young people',
                'body' => 'For young people with life-limiting conditions, making the transition from children’s to adult services is like falling off a cliff edge. The transition these young people have to undergo from the comprehensive care offered by children’s palliative care to unfamiliar adults’ services can be daunting...',
            ],
            [
                'title' => 'Northern Ireland',
                'body' => 'There are 1,300 children in Northern Ireland with life-limiting or life-threatening conditions. Together for Short Lives is working in partnership with the sector in Northern Ireland to secure funding to implement the Department of Health’s ‘Providing High Quality Palliative Care for Our Children: A Strategy...',
            ],
            [
                'title' => 'Wales',
                'body' => 'There are 1,000 children in Wales with life-limiting or life-threatening conditions. Much progress has been made implementing the Welsh Government’s End of Life Care Delivery Plan for children, young people and their families, including the Welsh Government’s proposed £888,000 per year increase in funding for...',
            ],
            [
                'title' => 'Scotland',
                'body' => 'We welcome the progress that planners, funders and providers have made in making sure that children, young people and their families in Scotland can access the palliative care they need, where they need it. This includes the Scottish Government\'s commitment develop and publish a new...',
            ],
            [
                'title' => 'At a glance: the public policies affecting children in the UK who need palliative care',
                'body' => 'We have compiled a list of all of the public policies published by the UK Government, devolved governments and other statutory bodies that have an impact on children with life-limiting conditions, their families and the services and professionals who care for them. We have written...',
            ]
        ];

        foreach ($policies as $policy) {
            \App\Models\Policy::create($policy);
        }

    }
}
