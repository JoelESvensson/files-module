<?php namespace Anomaly\FilesModule\Http\Controller\Admin;

use Anomaly\SettingsModule\Setting\Form\SettingFormBuilder;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

/**
 * Class SettingsController
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\Http\Controller\Admin
 */
class SettingsController extends AdminController
{

    /**
     * Return a form to edit settings.
     *
     * @param SettingFormBuilder $form
     * @return \Illuminate\View\View|\Symfony\Component\HttpFoundation\Response
     */
    public function edit(SettingFormBuilder $form)
    {
        return $form->render('anomaly.module.files');
    }
}
