<?php

namespace App\Admin\Metrics;

use App\Models\TodoRecord;
use App\Models\User;
use Closure;
use Dcat\Admin\Grid\LazyRenderable as LazyGrid;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Card;
use Illuminate\Contracts\Support\Renderable;

class BannerUserCount extends Card
{
    /**
     * @param string|Closure|Renderable|LazyWidget $content
     *
     * @return BannerMyTodoCounts
     */
    public function content($content): BannerUserCount
    {
        if ($content instanceof LazyGrid) {
            $content->simple();
        }
        $value = User::count();
        $text = 'Tổng người dùng';
        $route = admin_route('todo.records.index', ['user_id' => auth('admin')->user()->id]);
        $bg = url('static/images/blue.png');
        $html = <<<HTML
<a href="{$route}">
    <div class="small-box" style="padding:0 20px;height:100px;margin-bottom: 0;border-radius: .25rem;background: url('{$bg}') no-repeat;background-size: 100% 100%;">
    <div class="inner">
        <h4 style="color: white;font-size: 30px;text-shadow: #888888 1px 1px 2px;">{$value}</h4>
        <p style="color: white;text-shadow: #888888 1px 1px 2px;">{$text}</p>
    </div>
</div>
</a>

HTML;

        $this->content = $this->formatRenderable($html);
        $this->noPadding();

        return $this;
    }
}
