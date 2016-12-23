<?php
    namespace api\Form\Type;

    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;

    class MembreType extends AbstractType{

        public function buildForm(FormBuilderInterface $builder, array $options){
            $builder->add('nom', TextareaType::class);
            $builder->add('prenom', TextareaType::class);
            $builder->add('date_naissance', TextareaType::class);
            $builder->add('adresse', TextareaType::class);
            $builder->add('code_postal', TextareaType::class);
            $builder->add('ville', TextareaType::class);
            $builder->add('etudes', TextareaType::class);
            $builder->add('contrat', TextareaType::class);
        }

        public function getName(){
            return 'membre';
        }
    }