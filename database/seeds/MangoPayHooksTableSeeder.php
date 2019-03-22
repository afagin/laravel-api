<?php

use Illuminate\Database\Seeder;

class MangoPayHooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mangopay_hooks')->delete();

        $hooks = [
            'PAYIN_NORMAL_CREATED',
            'PAYIN_NORMAL_SUCCEEDED',
            'PAYIN_NORMAL_FAILED',
            'PAYOUT_NORMAL_CREATED',
            'PAYOUT_NORMAL_SUCCEEDED',
            'PAYOUT_NORMAL_FAILED',
            'TRANSFER_NORMAL_CREATED',
            'TRANSFER_NORMAL_SUCCEEDED',
            'TRANSFER_NORMAL_FAILED',
            'PAYIN_REFUND_CREATED',
            'PAYIN_REFUND_SUCCEEDED',
            'PAYIN_REFUND_FAILED',
            'PAYOUT_REFUND_CREATED',
            'PAYOUT_REFUND_SUCCEEDED',
            'PAYOUT_REFUND_FAILED',
            'TRANSFER_REFUND_CREATED',
            'TRANSFER_REFUND_SUCCEEDED',
            'TRANSFER_REFUND_FAILED',
            'PAYIN_REPUDIATION_CREATED',
            'PAYIN_REPUDIATION_SUCCEEDED',
            'PAYIN_REPUDIATION_FAILED',
            'KYC_CREATED',
            'KYC_SUCCEEDED',
            'KYC_FAILED',
            'KYC_VALIDATION_ASKED',
            'DISPUTE_DOCUMENT_CREATED',
            'DISPUTE_DOCUMENT_VALIDATION_ASKED',
            'DISPUTE_DOCUMENT_SUCCEEDED',
            'DISPUTE_DOCUMENT_FAILED',
            'DISPUTE_CREATED',
            'DISPUTE_SUBMITTED',
            'DISPUTE_ACTION_REQUIRED',
            'DISPUTE_FURTHER_ACTION_REQUIRED',
            'DISPUTE_CLOSED',
            'DISPUTE_SENT_TO_BANK',
            'TRANSFER_SETTLEMENT_CREATED',
            'TRANSFER_SETTLEMENT_SUCCEEDED',
            'TRANSFER_SETTLEMENT_FAILED',
            'MANDATE_CREATED',
            'MANDATE_FAILED',
            'MANDATE_ACTIVATED',
            'MANDATE_SUBMITTED',
            'PREAUTHORIZATION_PAYMENT_WAITING',
            'PREAUTHORIZATION_PAYMENT_EXPIRED',
            'PREAUTHORIZATION_PAYMENT_CANCELED',
            'PREAUTHORIZATION_PAYMENT_VALIDATED',
            'UBO_DECLARATION_CREATED',
            'UBO_DECLARATION_VALIDATION_ASKED',
            'UBO_DECLARATION_REFUSED',
            'UBO_DECLARATION_VALIDATE'
        ];

        foreach ($hooks as $hook) {
            DB::table('mangopay_hooks')->insert([
                'hook' => $hook,
            ]);
        }
    }
}
