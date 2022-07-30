<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\HistoryBet;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class HistoryBetController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new HistoryBet(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('category');
            $grid->column('luotso');
            $grid->column('cachchoi');
            $grid->column('infor_bet');
            $grid->column('sodoncuoc');
            $grid->column('capdonhan');
            $grid->column('money');
            $grid->column('status');
            $grid->column('thangthua');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new HistoryBet(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('category');
            $show->field('luotso');
            $show->field('cachchoi');
            $show->field('infor_bet');
            $show->field('sodoncuoc');
            $show->field('capdonhan');
            $show->field('money');
            $show->field('status');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new HistoryBet(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('category');
            $form->datetime('luotso');
            $form->text('cachchoi');
            $form->text('infor_bet');
            $form->text('sodoncuoc');
            $form->text('capdonhan');
            $form->text('money');
            $form->text('status');
            $form->number('thangthua');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
