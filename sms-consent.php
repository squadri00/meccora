<?php
require __DIR__ . '/partials/config.php';
$meta = [
    'slug'        => 'sms-consent',
    'title'       => 'SMS Consent Process — Meccora',
    'description' => 'How Meccora manages SMS consent for auto repair shops — who collects it, acceptable methods, what is recorded, opt-out handling, auditing and subscriber responsibilities.',
    'body_class'  => 'has-page-header',
];
require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/header.php';
$ph = ['title' => 'SMS Consent Process', 'crumb' => 'SMS Consent Process'];
$legal = [
  'effective' => 'July 8, 2026',
  'intro'     => 'This document explains how Meccora manages customer consent for SMS messaging. It is intended to support transparency, regulatory compliance, and Twilio A2P messaging requirements. Meccora is a multi-tenant SaaS platform used by independent automotive repair shops. Each repair shop is responsible for obtaining customer consent before sending SMS messages.',
  'sections'  => [
    ['h' => '1. Purpose', 'p' => ['The Platform is designed exclusively for operational communications related to vehicle service. SMS messages are used to improve customer communication and reduce missed appointments. Marketing campaigns, promotional offers, mass advertising and unrelated messaging are not permitted through this messaging program.']],
    ['h' => '2. Who Obtains Consent', 'p' => ['Consent is obtained directly by the participating repair shop during its normal customer interactions. The Platform does not collect consent directly from customers because it does not have a direct business relationship with vehicle owners. Each repair shop is responsible for ensuring that consent is collected in accordance with applicable laws and carrier requirements.']],
    ['h' => '3. Acceptable Consent Methods', 'p' => ['Depending on applicable law, consent may be collected through one or more of the following methods:'], 'ul' => [
      'Verbal consent during an in-person visit.',
      'Verbal consent during a telephone conversation.',
      'A signed repair authorization or service intake form.',
      'An electronic service agreement or customer portal.',
      'Another legally permitted method accepted by applicable regulations.',
    ]],
    ['h' => '4. Recording Consent', 'p' => ['When consent is received, the employee immediately records it in Meccora. The system stores:'], 'ul' => [
      'Customer mobile number.',
      'Consent status.',
      'Consent method.',
      'Date and time the consent was recorded.',
      'Employee ID of the staff member who recorded the consent.',
      'Optional notes when required by the repair shop.',
    ]],
    ['h' => '5. Before the First Message', 'p' => ['Employees are expected to confirm that consent has been recorded before sending the first SMS message. Shops should establish internal procedures to prevent messaging customers whose consent has not been documented.']],
    ['h' => '6. Types of Messages Covered', 'p' => ['Consent applies only to transactional automotive service communications, including appointment reminders, maintenance reminders, repair status updates, approval requests, parts availability notifications, vehicle pickup notifications and similar service-related messages.']],
    ['h' => '7. Marketing Restriction', 'p' => ['The Platform must not be used to send promotional discounts, coupons, newsletters, referral campaigns, contests, political messages, fundraising requests or unrelated advertising. If a repair shop wishes to conduct marketing campaigns, it must use an appropriate system and obtain any additional consent required by law.']],
    ['h' => '8. Opt-Out Process', 'p' => ['Customers may withdraw consent at any time by replying STOP. Repair shops may also process opt-out requests received in person, by telephone or by email. Once an opt-out request is received, messaging should stop unless the customer later provides new consent.']],
    ['h' => '9. HELP Requests', 'p' => ['Customers may reply HELP for messaging assistance. They may also contact the repair shop directly using the contact information provided during their service visit.']],
    ['h' => '10. Consent Auditing', 'p' => ['Consent records are retained to support audits, dispute resolution and messaging compliance. Repair shops should periodically review their records to ensure customer information remains accurate and that employees consistently follow the documented consent procedure.']],
    ['h' => '11. Subscriber Responsibilities', 'ul' => [
      'Obtain valid customer consent before sending SMS messages.',
      'Record consent accurately within the CRM.',
      'Honor all opt-out requests promptly.',
      'Send only transactional automotive service notifications.',
      'Comply with applicable laws, carrier rules and Twilio A2P requirements.',
    ]],
    ['h' => '12. Platform Responsibilities', 'p' => ['Meccora provides tools for recording consent, storing consent information, maintaining messaging logs and supporting compliance. The Platform does not verify whether a repair shop has properly obtained consent and relies on each subscriber to provide truthful and accurate records.']],
    ['h' => '13. Policy Updates', 'p' => ['This process may be updated as regulations, carrier requirements or Platform functionality change. The most current version will always be published on this page.']],
  ],
];
require __DIR__ . '/partials/legal.php';
