<?php

namespace App\Console\Commands;


use App\Admin\Repositories\HistoryBet;
use App\Models\User;
use Carbon\Carbon;
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
    protected $signature = 'kqxs:check {name} {value}';

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
        $lo4so = [];
        $lo3so = [];
        $value = $this->argument('value');
        $name = $this->argument('name');
        Log::info($name);
        $response = Http::get("https://xskt.vip/api/front/open/lottery/history/list/1/$value");
        $start = Carbon::create($response->json()['t']['openTime'])->timestamp;
        $end = Carbon::create($response->json()['t']['serverTime'])->timestamp;
        $timeshow = Carbon::create($response->json()['t']['issueList'][0]['openTime'])->timestamp;
        if($start-$end<$start-$timeshow){
            sleep($start-$end);
        }
        $kqs = trim($response->json($key = null)['t']['issueList']['0']['detail'], '[]"');
        $kqs = str_replace('"', '', $kqs);
        $arraykq = explode(',', $kqs);
        foreach ($arraykq as $kq) {
            $lo2so[] = substr($kq, -2);
            if (strlen($kq) > 2) {
                $lo3so[] = substr($kq, -3);
            }
            if (strlen($kq) > 3) {
                $lo4so[] = substr($kq, -4);
            }
        }

        $bets = HistoryBet::getbets($name, $response->json()['t']['issueList'][0]['openTime'], $response->json()['t']['openTime']);
        foreach ($bets as $bet) {
            if (strpos($bet->infor_bet, ',')) {
                $infor_bet = explode(',', $bet->infor_bet);
            } else {
                $infor_bet[] = $bet->infor_bet;
            }
            switch ($bet->infor_bet) {
                case 'Bao L?? - L?? 2 S???':
                    if ($result = array_intersect($lo2so, $infor_bet)) {
                        $this->validate($result, 99.5, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case 'Bao L?? - L?? 2 S??? 1K':
                    if ($result = array_intersect($lo2so, $infor_bet)) {
                        $this->validate($result, 5.5, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case 'Bao L?? - L?? 3 S???':
                    if ($result = array_intersect($lo3so, $infor_bet)) {
                        $this->validate($result, 5.5, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case 'Bao L?? - L?? 4 S???':
                    if ($result = array_intersect($lo4so, $infor_bet)) {
                        $this->validate($result, 8880, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case 'L?? Xi??n - Xi??n 3':
                    if ($result = array_diff($infor_bet, $lo2so)) {
                        if (count($result) == 0) {
                            $this->validate($result, 150, $bet);

                        } else {
                            $this->validate(false, 0, $bet);
                        }

                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case 'L?? Xi??n - Xi??n 4':
                    if ($result = array_diff($infor_bet, $lo2so)) {
                        if (count($result) == 0) {
                            $this->validate($result, 750, $bet);
                        } else {
                            $this->validate(false, 0, $bet);
                        }
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '????nh ????? - ????? ?????u':
                    if (in_array($lo2so[-1], $infor_bet)) {
                        $this->validate(true, 99, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '????nh ????? - ????? ?????c bi???t':
                    if (in_array($lo2so[0], $infor_bet)) {
                        $this->validate(true, 99, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '????nh ????? - ????? ?????u ??u??i':
                    if (in_array($lo2so[0], $infor_bet) or in_array($lo2so[-1], $infor_bet)) {
                        $this->validate(true, 99, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '?????u ??u??i - ?????u':
                    if (in_array($lo2so[0][0], $infor_bet)) {
                        $this->validate(true, 9.9, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '?????u ??u??i - ??u??i':
                    if (in_array($lo2so[0][-1], $infor_bet)) {
                        $this->validate(true, 9.9, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case'3 C??ng - 3 C??ng ?????u':
                    if (in_array($lo3so[-1], $infor_bet)) {
                        $this->validate(true, 960, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '3 C??ng - 3 C??ng ?????c Bi???t':
                    if (in_array($lo3so[0], $infor_bet)) {
                        $this->validate(true, 960, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '3 C??ng - 3 C??ng ?????u ??u??i':
                    if (in_array($lo3so[0], $infor_bet) or in_array($lo3so[-1], $infor_bet)) {
                        $this->validate(true, 960, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case '4 C??ng - 4 C??ng ?????c Bi???t':
                    if (in_array($lo4so[0], $infor_bet)) {
                        $this->validate(true, 9000, $bet);
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case'L?? Tr?????t - Tr?????t Xi??n 4':
                    if ($result = array_intersect($lo4so, $infor_bet)) {
                        if (count($result) == 4) {
                            $this->validate(true, 2, $bet);
                        } else {
                            $this->validate(false, 0, $bet);
                        }
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case'L?? Tr?????t - Tr?????t Xi??n 8':
                    if ($result = array_intersect($lo4so, $infor_bet)) {
                        if (count($result) == 8) {
                            $this->validate(true, 3.5, $bet);
                        } else {
                            $this->validate(false, 0, $bet);
                        }
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                case'L?? Tr?????t - Tr?????t Xi??n 10':
                    if ($result = array_intersect($lo4so, $infor_bet)) {
                        if (count($result) == 10) {
                            $this->validate(true, 4.5, $bet);
                        } else {
                            $this->validate(false, 0, $bet);
                        }
                    } else {
                        $this->validate(false, 0, $bet);
                    }
                    break;
                default:
                    break;
            }
        }

        return true;
    }

    public function validate($dieukien, $capdonhan, $bet)
    {
        if (!is_array($dieukien)) {
            $dieukien = [1];
        }
        if ($dieukien) {
            $bet->thangthua = $bet->capdonhan * count($dieukien) * 1000 * $capdonhan - $bet->money;
            $bet->status = 0;
            $user = User::find($bet->id);
            $user->money = $user->money + $bet->thangthua;
            $bet->save();
            $user->save();
        } else {
            $bet->thangthua = -$bet->money;
            $bet->status = 0;
            $bet->save();
        }
    }
}
