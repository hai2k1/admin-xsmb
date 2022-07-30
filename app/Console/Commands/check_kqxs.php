<?php

namespace App\Console\Commands;


use App\Admin\Repositories\HistoryBet;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class check_kqxs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'kqxs:checkmb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'kiem tra kqxs';

    /**
     * Execute the console command.
     *
     * @return int
     */

    public function handle()
    {
        $lo2so = [];
        $infor_bet = [];
        $response = Http::get('https://xskt.vip/api/front/open/lottery/history/list/1/st45g');
        $kqs = trim($response->json($key = null)['t']['issueList']['0']['detail'], '[]"');
        $kqs = str_replace('"', '', $kqs);
        $arraykq = explode(',', $kqs);
        foreach ($arraykq as $kq) {
            $lo2so[] = substr($kq, -2);
        }

        $bets = HistoryBet::getbets('Miền Bắc', $response->json()['t']['issueList'][0]['openTime'], $response->json()['t']['openTime']);
        foreach ($bets as $bet) {
            if(strpos($bet->infor_bet,',')){
                $infor_bet = explode(',', $bet->infor_bet);
            }
            else{
                $infor_bet[] = $bet->infor_bet;
            }
            if ($bet->cachchoi == 'Đánh Đề - Đề đặc biệt') {

                $this->validate(in_array($lo2so[0],$infor_bet),99,$bet);
            }
            if ($bet->cachchoi == 'Đánh Đề - Đề đầu') {
                $this->validate(in_array(substr($arraykq[0], 0, 2),$infor_bet),99,$bet);
            }
            if ($bet->cachchoi == 'Bao Lô - Lô 2 Số') {
                $this->validate(in_array($bet->infor_bet, $lo2so),99,$bet);
            }
            if($bet->cachchoi == ''){

            }
        }
    }

    public function validate($dieukien, $capdonhan, $bet)
    {
        if ($dieukien) {
            $bet->thangthua = $bet->capdonhan * 1000 * $capdonhan - $bet->money;
            $bet->status = 0;
            $bet->save();
        } else {
            $bet->thangthua = -$bet->money;
            $bet->status = 0;
            $bet->save();
        }
    }
}
