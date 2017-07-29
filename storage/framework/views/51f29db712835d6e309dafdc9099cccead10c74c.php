<div class="row">Utilisateurs
    <div class="col offset-l4 l6"></div>
        <?php if(session()->has('ok')): ?>
            <div class="alert alert-success alert-dismissible"><?php echo session('ok'); ?></div>
        <?php endif; ?>
    <div class="row">
        <div class="col s12 m6 l6">
            <h3 class="align-center">Liste des utilisateurs</h3>
                <table class="table highlight responsive-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo $user->id; ?></td>
                        <td class=""><strong><?php echo $user->name; ?></strong></td>
                        <td><?php echo link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn']); ?></td>
                        <td><?php echo link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn']); ?></td>
                        <td>
                            <?php echo Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]); ?>

                                <?php echo Form::submit('Supprimer', ['class' => 'btn', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']); ?>

                            <?php echo Form::close(); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>                
    </div>
    <?php echo link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']); ?>

    <?php echo $users->links(); ?>

</div>