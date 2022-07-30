<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\HistoryPayment;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class HistoryPaymentController extends AdminController
{

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new HistoryPayment(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('user_id');
            $grid->column('bank_id');
            $grid->column('money')->display(function ($money){
                return number_format($money) .' vnđ';
            });
            $grid->column('bank_name');
            $grid->column('banker');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
//            $grid->disableCreateButton();
            $grid->enableDialogCreate();
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
        return Show::make($id, new HistoryPayment(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('bank_id');
            $show->field('money');
            $show->field('bank_name');
            $show->field('banker');
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
        return Form::make(new HistoryPayment(), function (Form $form) {
            $form->display('id');
            $form->display('user_id');
            $form->text('bank_id');
            $form->text('money');
            $form->text('bank_name');
            $form->text('banker');
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
