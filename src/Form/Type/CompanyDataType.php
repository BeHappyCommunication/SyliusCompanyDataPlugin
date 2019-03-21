<?php

declare(strict_types = 1);

namespace BeHappy\SyliusCompanyDataPlugin\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Component\Core\Model\Channel;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class CompanyDataType extends AbstractResourceType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Build your custom form, with all fields that you need
        $builder
            ->add('name', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.name'
            ])
            ->add('addressNumber', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.address_number'
            ])
            ->add('addressStreet', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.address_street'
            ])
            ->add('addressStreetExtension', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.address_street_extension',
                'required' => false
            ])
            ->add('addressZipCode', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.address_zip_code'
            ])
            ->add('addressCity', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.address_city'
            ])
            ->add('addressCountry', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.address_country'
            ])
            ->add('vatNumber', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.vat_number'
            ])
            ->add('siret', TextType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.siret'
            ])
            ->add('information', TextareaType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.information',
                'required' => false
            ])
            ->add('channels', EntityType::class, [
                'label' => 'behappy_company_data_plugin.ui.form.channels',
                'class' => Channel::class,
                'required' => false,
                'multiple' => true,
                'expanded' => true
            ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'behappy_company_data_plugin_company_data';
    }
}
