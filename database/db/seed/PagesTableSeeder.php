<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 2,
                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'contents' => '<p><strong>Acceptance the Use of HireANerd Technology Pvt Ltd Terms and Conditions</strong></p>

<p>By availing any service from HireANerd Technology Pvt Ltd, you&rsquo;re acknowledging the terms and conditions provided by us. Any of your access is subject to follow these terms and conditions strictly. You will not avail Intlum for any purpose which is illegal or forbidden by these terms and conditions. If you&rsquo;re availing services from Intlum Technology, that denotes the agreement with the disclaimers, terms, and conditions provided in this page. If you&rsquo;re unlikely to this terms and conditions and do not want to accept, you need to instantly stop using our service.</p>

<p><strong>Credit card details</strong></p>

<p>You are requested not to enter any of your Credit Card details on any form of HireANerd Technology Pvt Ltd. Because we will never ask you for Credit Card details. If you find any form, documentation or payment that requires your Credit Card details, contact Intlum before you continue.</p>

<p><strong>Advice</strong></p>

<p>The contents of HireANerd Technology Pvt Ltd website do not establish opinion and should not be entirely relied upon in making or refusing any decision that you make. We write as per the current standard. But you can make your decisions.</p>

<p><strong>Change of Use</strong></p>

<p>HireANerd Technology Pvt Ltd reserves the right to:</p>

<p>Modify or Eliminate anything from its website at any point of time without any notice. And by accepting these terms and condition you&rsquo;re confirming that Intlum Technology will neither be liable for any changes done in its site, nor it needs to inform about any modification to its website. Modify the terms and conditions at any time without any prior notice. And the continuing use of your website after the modification will convey your acceptance of the changes made.</p>

<p><strong>Links to Third Party Websites</strong></p>

<p>HireANerd Technology Pvt Ltd Website may contain links to external websites that are coordinated and preserved by others. Any link to other websites is not an advocacy of such websites and you accept and approve that we are not accountable for the content or accessibility of any such sites.</p>

<p><strong>Copyright</strong></p>

<p>Copyright, trademarks and all the further intellectual property permissions in the Website and its content (including the text, design, graphics and all source codes and software linked to the Website) are possessed by or registered to HireANerd Technology Pvt Ltd or else handled by HireANerd Technology Pvt Ltd as legalized by law.<br />
While accessing the HireANerd Technology Pvt Ltd website, you agree that you will access the content exclusively for your private, non-commercial practice. None of the content may be transferred, copied, duplicated, broadcasted, saved, traded or distributed without the aforementioned written agreement of the copyright owner. This keeps out the downloading, replication and/or printing of pages of the Website for private, non-commercial usage only.</p>

<p><strong>Disclaimers and Limitation of Liability</strong></p>

<p>The Website is delivered on AS IS and AS AVAILABLE basis without any depiction or advocacy made and deprived of assurance of any kind whether articulated or suggested, counting but not limited to the indicated warranties of suitable quality, condition for a specific reason, non-violation, compatibility, safety, and precision.&nbsp;</p>

<p>As allowable by regulation, HireANerd Technology Pvt Ltd will not be accountable for any unintended or subsequent damage or harm whatever (including but not limited to loss of prospect, business, information, revenues) arising out of or regarding the Website practice.<br />
HireANerd Technology Pvt Ltd doesn&rsquo;t assure that the functionality of the Website will be continuous or free of errors, that flaws will be modified after the post-project support period or that the Website or the server that avails it is virus-free or free of other damaging or vicious elements.<br />
Not anything in these Terms and Conditions will be interpreted in order to discard or limit the accountability of HireANerd Technology Pvt Ltd for death or individual damage as a result of the carelessness of HireANerd Technology Pvt Ltd or that of its staffs or managers.</p>

<p><strong>Indemnity</strong></p>

<p>You agree to ensure, and hold HireANerd Technology Pvt Ltd and its personnel and managers safe from and against all obligations, legal charges, compensations, debits, charges and other expenditures concerning any allegation or action brought against HireANerd Technology Pvt Ltd arising out of any violation by you of these Terms and Conditions or other obligations arising out of your use of Intlum Website.</p>

<p><strong>Compensation</strong></p>

<p>If any of these Terms and Conditions is verified by any court of competent jurisdiction to be unacceptable, unlawful or unenforceable for any cause, then the Term or Condition will certainly be cut off and the outstanding Terms and Conditions will continue and stay in full force and result and remain to be enforceable and compulsory.</p>

<p>Governing Law</p>

<p>These Terms and Conditions written on HireANerd Technology Pvt Ltd will be administered by and interpreted in line with the law of USA and you hereby submit to the complete authority of the USA courts.</p>',
                'is_active' => 1,
                'created_at' => '2019-08-22 16:07:52',
                'updated_at' => '2019-08-22 16:25:16',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Terms & Conditions',
                'slug' => 'terms-conditions',
                'contents' => '<p><strong>Acceptance the Use of HireANerd Technology Pvt Ltd Terms and Conditions</strong></p>

<p>By availing any service from HireANerd Technology Pvt Ltd, you&rsquo;re acknowledging the terms and conditions provided by us. Any of your access is subject to follow these terms and conditions strictly. You will not avail Intlum for any purpose which is illegal or forbidden by these terms and conditions. If you&rsquo;re availing services from Intlum Technology, that denotes the agreement with the disclaimers, terms, and conditions provided in this page. If you&rsquo;re unlikely to this terms and conditions and do not want to accept, you need to instantly stop using our service.</p>

<p>Credit card details</p>

<p>You are requested not to enter any of your Credit Card details on any form of HireANerd Technology Pvt Ltd. Because we will never ask you for Credit Card details. If you find any form, documentation or payment that requires your Credit Card details, contact Intlum before you continue.</p>

<p>Advice</p>

<p><strong>The contents of HireANerd Technology Pvt Ltd website do not establish opinion and should not be entirely relied upon in making or refusing any decision that you make. We write as per the current standard. But you can make your decisions.</strong></p>

<p>Change of Use</p>

<p>HireANerd Technology Pvt Ltd reserves the right to:</p>

<p>Modify or Eliminate anything from its website at any point of time without any notice. And by accepting these terms and condition you&rsquo;re confirming that Intlum Technology will neither be liable for any changes done in its site, nor it needs to inform about any modification to its website. Modify the terms and conditions at any time without any prior notice. And the continuing use of your website after the modification will convey your acceptance of the changes made.</p>

<p>Links to Third Party Websites</p>

<p>HireANerd Technology Pvt Ltd Website may contain links to external websites that are coordinated and preserved by others. Any link to other websites is not an advocacy of such websites and you accept and approve that we are not accountable for the content or accessibility of any such sites.</p>

<p>Copyright</p>

<p>Copyright, trademarks and all the further intellectual property permissions in the Website and its content (including the text, design, graphics and all source codes and software linked to the Website) are possessed by or registered to HireANerd Technology Pvt Ltd or else handled by HireANerd Technology Pvt Ltd as legalized by law.<br />
While accessing the HireANerd Technology Pvt Ltd website, you agree that you will access the content exclusively for your private, non-commercial practice. None of the content may be transferred, copied, duplicated, broadcasted, saved, traded or distributed without the aforementioned written agreement of the copyright owner. This keeps out the downloading, replication and/or printing of pages of the Website for private, non-commercial usage only.</p>

<p>Disclaimers and Limitation of Liability</p>

<p>The Website is delivered on AS IS and AS AVAILABLE basis without any depiction or advocacy made and deprived of assurance of any kind whether articulated or suggested, counting but not limited to the indicated warranties of suitable quality, condition for a specific reason, non-violation, compatibility, safety, and precision.&nbsp;</p>

<p>As allowable by regulation, HireANerd Technology Pvt Ltd will not be accountable for any unintended or subsequent damage or harm whatever (including but not limited to loss of prospect, business, information, revenues) arising out of or regarding the Website practice.<br />
HireANerd Technology Pvt Ltd doesn&rsquo;t assure that the functionality of the Website will be continuous or free of errors, that flaws will be modified after the post-project support period or that the Website or the server that avails it is virus-free or free of other damaging or vicious elements.<br />
Not anything in these Terms and Conditions will be interpreted in order to discard or limit the accountability of HireANerd Technology Pvt Ltd for death or individual damage as a result of the carelessness of HireANerd Technology Pvt Ltd or that of its staffs or managers.</p>

<p>Indemnity</p>

<p>You agree to ensure, and hold HireANerd Technology Pvt Ltd and its personnel and managers safe from and against all obligations, legal charges, compensations, debits, charges and other expenditures concerning any allegation or action brought against HireANerd Technology Pvt Ltd arising out of any violation by you of these Terms and Conditions or other obligations arising out of your use of Intlum Website.</p>

<p>Compensation</p>

<p>If any of these Terms and Conditions is verified by any court of competent jurisdiction to be unacceptable, unlawful or unenforceable for any cause, then the Term or Condition will certainly be cut off and the outstanding Terms and Conditions will continue and stay in full force and result and remain to be enforceable and compulsory.</p>

<p>Governing Law</p>

<p>These Terms and Conditions written on HireANerd Technology Pvt Ltd will be administered by and interpreted in line with the law of USA and you hereby submit to the complete authority of the USA courts.</p>',
                'is_active' => 1,
                'created_at' => '2019-08-22 16:22:45',
                'updated_at' => '2019-08-22 16:23:22',
            ),
        ));
        
        
    }
}